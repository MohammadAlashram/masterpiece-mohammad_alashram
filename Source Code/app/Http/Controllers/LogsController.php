<?php

namespace App\Http\Controllers;

use App\Models\logs;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logs = logs::all();

        $usersBlock = logs::where('action', '=', 'Block')->get();
        $userBlockCount = 0;
        foreach ($usersBlock as $userBlock) {
            $userBlockCount = $userBlockCount +1;
        }

        $usersSuspend = logs::where('action', '=', 'Suspend')->get();
        $userSuspendCount = 0;
        foreach ($usersSuspend as $userSuspend) {
            $userSuspendCount = $userSuspendCount +1;
        }

        $usersUnBan = logs::where('action', '=', 'UnBan')->get();
        $userUnBanCount = 0;
        foreach ($usersUnBan as $userUnBan) {
            $userUnBanCount = $userUnBanCount +1;
        }

        $usersEdit = logs::where('action', '=', 'Edit Admin')->get();
        $userEditCount = 0;
        foreach ($usersEdit as $userEdit) {
            $userEditCount = $userEditCount +1;
        }

        $usersAdd = logs::where('action', '=', 'Add')->get();
        $userAddCount = 0;
        foreach ($usersAdd as $userAdd) {
            $userAddCount = $userAddCount +1;
        }

        $usersDelete = logs::where('action', '=', 'Delete')->get();
        $userDeleteCount = 0;
        foreach ($usersDelete as $userDelete) {
            $userDeleteCount = $userDeleteCount +1;
        }

        $usersImport = logs::where('action', '=', 'Import')->get();
        $userImportCount = 0;
        foreach ($usersImport as $userImport) {
            $userImportCount = $userImportCount +1;
        }

        $usersExport = logs::where('action', '=', 'Export')->get();
        $userExportCount = 0;
        foreach ($usersExport as $userExport) {
            $userExportCount = $userExportCount +1;
        }
        
        return view('dashboard/logs', compact('logs' ,'userBlockCount','userSuspendCount', 'userUnBanCount','userEditCount','userAddCount','userDeleteCount','userImportCount','userExportCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\logs  $logs
     * @return \Illuminate\Http\Response
     */
    public function show(logs $logs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\logs  $logs
     * @return \Illuminate\Http\Response
     */
    public function edit(logs $logs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\logs  $logs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, logs $logs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\logs  $logs
     * @return \Illuminate\Http\Response
     */
    public function destroy(logs $logs)
    {
        //
    }
}
