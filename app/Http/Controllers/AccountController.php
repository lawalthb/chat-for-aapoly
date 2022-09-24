<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admins;
use App\Http\Requests\AdminsAccountEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Exception;
/**
 * Account Page Controller
 * @category  Controller
 */
class AccountController extends Controller{
	

	/**
     * Select user account data
     * @return \Illuminate\View\View
     */
	function index(){
		$rec_id = Auth::id();
		$query = Admins::query();
		$record = $query->find($rec_id, Admins::accountviewFields());
		if(!$record){
			return $this->reject(__('noRecordFound'), 404);
		}
		return $this->renderView("pages.account.view", ["data" => $record, "rec_id" => $rec_id]);
	}
	

	/**
     * Update user account data
     * @return \Illuminate\View\View;
     */
	function edit(AdminsAccountEditRequest $request){
		$rec_id = Auth::id();
		$query = Admins::query();
		$user = $query->findOrFail($rec_id, Admins::accounteditFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$user->update($modeldata);
			return $this->redirect("account", __('recordUpdatedSuccessfully'));
		}
		return $this->renderView("pages.account.edit", ["data" => $user, "rec_id" => $rec_id]);
	}
	

	/**
     * Change user account password
     * @return \Illuminate\Http\Response
     */
	public function changepassword(Request $request)
	{
		$request->validate([
			'oldpassword' => ['required'],
			'newpassword' => ['required'],
			'confirmpassword' => ['same:newpassword'],
		]);
		$userid = auth()->id();
		$user = Admins::find($userid);
		$oldPasswordText = $request->oldpassword;
		$oldPasswordHash = $user->password;
		if(!Hash::check($oldPasswordText, $oldPasswordHash)){
			return back()->withErrors(["Current password is incorrect"]);
		}
		$modeldata = ['password' => Hash::make($request->newpassword)];
		$user->update($modeldata);
		return $this->redirect("/account", "Password change completed");
	}
}