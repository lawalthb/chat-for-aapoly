<?php 
namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * Components data Model
 * Use for getting values from the database for page components
 * Support raw query builder
 * @category Model
 */
class ComponentsData{
	

	/**
     * Check if value already exist in Admins table
	 * @param string $value
     * @return bool
     */
	function admins_email_value_exist(Request $request){
		$value = trim($request->value);
		$exist = DB::table('admins')->where('email', $value)->value('email');   
		if($exist){
			return true;
		}
		return false;
	}
	

	/**
     * last_message_id_option_list Model Action
     * @return array
     */
	function last_message_id_option_list(){
		$sqltext = "SELECT id as value, fullname as label FROM users";
		$query_params = [];
		$arr = DB::select(DB::raw($sqltext), $query_params);
		return $arr;
	}
	

	/**
     * department_id_option_list Model Action
     * @return array
     */
	function department_id_option_list(){
		$sqltext = "SELECT id as value, name as label FROM departments";
		$query_params = [];
		$arr = DB::select(DB::raw($sqltext), $query_params);
		return $arr;
	}
	

	/**
     * language_id_option_list Model Action
     * @return array
     */
	function language_id_option_list(){
		$sqltext = "SELECT id as value, name as label FROM languages";
		$query_params = [];
		$arr = DB::select(DB::raw($sqltext), $query_params);
		return $arr;
	}
	

	/**
     * getcount_inboxes Model Action
     * @return int
     */
	function getcount_inboxes(){
		$sqltext = "SELECT COUNT(*) AS num FROM users";
		$query_params = [];
		$val = DB::selectOne(DB::raw($sqltext), $query_params);
		return $val->num;
	}
	

	/**
     * getcount_chat Model Action
     * @return int
     */
	function getcount_chat(){
		$sqltext = "SELECT COUNT(*) AS num FROM messages";
		$query_params = [];
		$val = DB::selectOne(DB::raw($sqltext), $query_params);
		return $val->num;
	}
	

	/**
     * getcount_agents Model Action
     * @return int
     */
	function getcount_agents(){
		$sqltext = "SELECT COUNT(*) AS num FROM admins";
		$query_params = [];
		$val = DB::selectOne(DB::raw($sqltext), $query_params);
		return $val->num;
	}
	

	/**
     * getcount_faq Model Action
     * @return int
     */
	function getcount_faq(){
		$sqltext = "SELECT COUNT(*) AS num FROM faq";
		$query_params = [];
		$val = DB::selectOne(DB::raw($sqltext), $query_params);
		return $val->num;
	}
	

	/**
	* barchart_chatschart Model Action
	* @return array
	*/
	function barchart_chatschart(){
		$request = request();
		$chart_data  = [];
		$sqltext = "SELECT  messages.id, messages.messages, messages.reg_date FROM messages";
		$query_params = [];
		$records = DB::select(DB::raw($sqltext), $query_params);
		$chart_labels = array_column($records, 'reg_date');
		$datasets = [];
		$dataset1 = [
			'data' =>  array_column($records, 'id'),
			'label' => "Message",
	'backgroundColor' =>  random_color(), 
	'borderColor' =>  random_color(), 
	'borderWidth' => '',
		];
		$datasets[] = $dataset1;
		$chart_data['datasets'] = $datasets;
		$chart_data['labels'] = $chart_labels;
		return $chart_data;
	}
}
