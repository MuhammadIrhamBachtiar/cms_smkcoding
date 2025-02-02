<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ConfigController extends Controller
{
    // Codeium: Refactor | Explain | Generate Function Comment | X
    public function index()
    {
        return view('back.config.index', [
            'config' => Config::paginate(7)
        ]);
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'value' => 'required|min:3',
        ]);

        Config::find($id)->update($data);

        return back()->with('success', 'Config has been updated');
    }
}
