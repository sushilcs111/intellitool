<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Library\Helper;
use Illuminate\Pagination\Paginator;
use DB;
class Vendor extends Model {
    protected $table = 'vendors';
    protected $fillable = ['firstname', 'lastname', 'email', 'phone', 'address', 'status'];
    protected $guarded = ['vertical_ids'];
    protected $casts = [
        'verticals' => 'json'
    ];
    public static function rules($id = null, $merge = []) {
        return array_merge(
                [
            'firstname' => 'required',
            'lastname' => 'required',
            'vertical_ids' => 'required',
            'email' => 'required|email|unique:vendors' . ($id ? ",email,$id" : ''),
            'phone' => 'required|numeric|unique:vendors' . ($id ? ",phone,$id" : '')
                ], $merge);
    }
    public $messages = [
        'firstname.required' => 'Firstname is required.',
        'lastname.required' => 'Lastname is required.',
        'email.unique' => 'Email Id have been already taken.',
        'email.required' => 'Email Id is required.',
        'vertical_ids.required' => 'Vertical is required.',
        'phone.required' => 'Phone is required.',
        'phone.unique' => 'Phone number have been already taken.',
        'phone.numeric' => 'Phone number should be valid.'
    ];
    public static function listing() {
        $list = DB::select("SELECT v.id,v.firstname,v.lastname,v.address,v.phone,v.email,v.status,group_concat(vt.name SEPARATOR ', ') as verticals FROM `vendors` v left join verticals vt on JSON_CONTAINS(v.verticals->'$[*]', CAST(vt.id as JSON), '$') GROUP by v.id");
        $list = new Paginator($list, Config('constants.adminPaginateNo'));
        return $list;
    }
    public static function addEdit($id) {
        $verticalSel = Vertical::getSelect();
        $vendor = self::findOrNew($id);
        $data = ['vendor' => $vendor, 'verticalSel' => $verticalSel];
        return $data;
    }
    public static function saveUpdate($input) {
        $vendor = self::findOrNew($input['id']);
        $vendor->fill($input)->save();
        if (!empty($input['vertical_ids'])) {
            $vendor->verticals = array_map('intval', $input['vertical_ids']);
            $vendor->update();
        }
    }
}
