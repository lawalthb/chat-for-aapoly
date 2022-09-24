<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminsAccountEditRequest;
use App\Http\Requests\AdminsAddRequest;
use App\Http\Requests\AdminsEditRequest;
use App\Models\Admins;
use Illuminate\Http\Request;
use Exception;
class AdminsController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.admins.list";
		$query = Admins::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Admins::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "admins.email";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Admins::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Admins::query();
		$record = $query->findOrFail($rec_id, Admins::viewFields());
		return $this->renderView("pages.admins.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.admins.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(AdminsAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		$modeldata['password'] = bcrypt($modeldata['password']);
		
		//save Admins record
		$record = Admins::create($modeldata);
		$rec_id = $record->email;
		return $this->redirect("admins", __('recordAddedSuccessfully'));
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(AdminsEditRequest $request, $rec_id = null){
		$query = Admins::query();
		$record = $query->findOrFail($rec_id, Admins::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("admins", __('recordUpdatedSuccessfully'));
		}
		return $this->renderView("pages.admins.edit", ["data" => $record, "rec_id" => $rec_id]);
	}
	

	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
	 * @param  \Illuminate\Http\Request
	 * @param string $rec_id //can be separated by comma 
     * @return \Illuminate\Http\Response
     */
	function delete(Request $request, $rec_id = null){
		$arr_id = explode(",", $rec_id);
		$query = Admins::query();
		$query->whereIn("email", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, __('recordDeletedSuccessfully'));
	}
}
