<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CrewInsertRequest;
use App\Http\Requests\CrewUpdateRequest;
use Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Crew;
use Symfony\Component\HttpFoundation\Response;

class CrewController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     * @var Crew
     *
     */

    public function index()
    {
        abort_if(Gate::denies('crew_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $crews = Crew::paginate(10);
        return view('crew.index', compact('crews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('crew_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('crew.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrewInsertRequest $request)
    {
        abort_if(Gate::denies('crew_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            Crew::create($request->all());
        } catch (\Exception $e) { dd($e);
            return redirect()->back()->with('error', 'Something went wrong.');
        }
        return redirect()->back()->with('message', 'Completed.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort_if(Gate::denies('crew_view'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            $crew = Crew::findOrFail($id);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
        return view('crew.show', compact('crew'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('crew_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            $crew = Crew::findOrFail($id);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
        return view('crew.edit', compact('crew'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CrewUpdateRequest $request, $id)
    {
        abort_if(Gate::denies('crew_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {

            Crew::where('id', $id)->update($request->except('_token','_method'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
        return redirect()->back()->with('message', 'Completed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('crew_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            Crew::where('id',$id)->delete();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
        return redirect()->back()->with('message', 'Completed.');
    }
}
