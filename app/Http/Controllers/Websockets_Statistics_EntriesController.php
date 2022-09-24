<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Websockets_Statistics_EntriesAddRequest;
use App\Http\Requests\Websockets_Statistics_EntriesEditRequest;
use App\Models\Websockets_Statistics_Entries;
use Illuminate\Http\Request;
use Exception;
class Websockets_Statistics_EntriesController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.websockets_statistics_entries.list";
		$query = Websockets_Statistics_Entries::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Websockets_Statistics_Entries::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "websockets_statistics_entries.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Websockets_Statistics_Entries::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Websockets_Statistics_Entries::query();
		$record = $query->findOrFail($rec_id, Websockets_Statistics_Entries::viewFields());
		return $this->renderView("pages.websockets_statistics_entries.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.websockets_statistics_entries.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(Websockets_Statistics_EntriesAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Websockets_Statistics_Entries record
		$record = Websockets_Statistics_Entries::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("websockets_statistics_entries", __('recordAddedSuccessfully'));
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(Websockets_Statistics_EntriesEditRequest $request, $rec_id = null){
		$query = Websockets_Statistics_Entries::query();
		$record = $query->findOrFail($rec_id, Websockets_Statistics_Entries::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("websockets_statistics_entries", __('recordUpdatedSuccessfully'));
		}
		return $this->renderView("pages.websockets_statistics_entries.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Websockets_Statistics_Entries::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, __('recordDeletedSuccessfully'));
	}
}
