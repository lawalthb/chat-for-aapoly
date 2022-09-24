<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\MessagesAddRequest;
use App\Http\Requests\MessagesEditRequest;
use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
class MessagesController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.messages.list";
		$query = Messages::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Messages::search($query, $search); // search table records
		}
		$query->join("users", "messages.user_id", "=", "users.id");
		$query->join("admins", "messages.admin_id", "=", "admins.id");
		$query->join("departments", "messages.department_id", "=", "departments.id");
		if($request->orderby){
			$orderby = $request->orderby;
			$ordertype = ($request->ordertype ? $request->ordertype : "desc");
			$query->orderBy($orderby, $ordertype);
		}
		else{
			$query->orderBy("messages.reg_date", "ASC");
		}
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Messages::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Messages::query();
		$record = $query->findOrFail($rec_id, Messages::viewFields());
		return $this->renderView("pages.messages.view", ["data" => $record]);
	}
	

	/**
     * Display Master Detail Pages
	 * @param string $rec_id //master record id
     * @return \Illuminate\View\View
     */
	function masterDetail($rec_id = null){
		return View("pages.messages.detail-pages", ["masterRecordId" => $rec_id]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.messages.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(MessagesAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		$modeldata['admin_id'] = auth()->user()->id;
		$this->beforeAdd($modeldata);
		
		//save Messages record
		$record = Messages::create($modeldata);
		$rec_id = $record->id;
		$this->afterAdd($record);
		return $this->redirect("users/view/20", __('recordAddedSuccessfully'));
	}
    /**
     * Before create new record
     * @param array $modeldata // validated form data used to create new record
     */
    private function beforeAdd($modeldata){
        //enter statement here
    }
    /**
     * After new record created
     * @param array $record // newly created record
     */
    private function afterAdd($record){
        //enter statement here
    }
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(MessagesEditRequest $request, $rec_id = null){
		$query = Messages::query();
		$record = $query->findOrFail($rec_id, Messages::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
		
		if( array_key_exists("userfile", $modeldata) ){
			//move uploaded file from temp directory to destination directory
			$fileInfo = $this->moveUploadedFiles($modeldata['userfile'], "userfile");
			$modeldata['userfile'] = $fileInfo['filepath'];
		}
			$record->update($modeldata);
			return $this->redirect("messages", __('recordUpdatedSuccessfully'));
		}
		return $this->renderView("pages.messages.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Messages::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, __('recordDeletedSuccessfully'));
	}
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function chat(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.messages.chat";
		$query = Messages::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Messages::search($query, $search); // search table records
		}
		$query->join("admins", "messages.admin_id", "=", "admins.id");
		$orderby = $request->orderby ?? "messages.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Messages::chatFields());
		return $this->renderView($view, compact("records"));
	}
    /**
     * Endpoint action
     * @return \Illuminate\Http\Response
     */
    public function get_user_chat(Request $request){
        $sqltext      = "SELECT messages, id FROM messages WHERE session_id=3";
        $query_params = ["param1" => "value"];
        $records      = DB::select($sqltext, $query_params);
        return $records;
    }
}
