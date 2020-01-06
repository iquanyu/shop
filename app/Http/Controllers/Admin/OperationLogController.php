<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OperationLog;

class OperationLogController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OperationLog $operationLog)
    {
      $log = new OperationLog();
      //dd($log->all());
      $logs = $operationLog->orderBy('created_at', 'DESC')->paginate();
      return view('admin.logs.index', compact('logs'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(OperationLog $operationLog, $id)
    {
      $operationLog->find($id)->delete();
      return [];
    }
}
