@extends('main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <h1>TABLE</h1>

                <thead>
                    <th>id</th>
                    <th>Name</th>
                    <th>Switch</th>
                </thead>

                <tbody>
                    @foreach($tools as $tool)
                    <tr>
                        <td>{{ $tool->id }}</td>
                        <td>{{ $tool->name }}</td>
                        <td>{{ $tool->switch }}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

    <div class="form-group">
        <label for="tools">Tool:</label><br>
        <select class="textWidth form-control" onchange="switchCheck()" name="tools" id="tools" type="text">
            <option disabled selected> -- select an option -- </option>
            @foreach($tools as $tool)
            <option value="{{$tool->switch}}">
                {{$tool->name}}
            </option>
            @endforeach
        </select>
    </div>

    <hr>
    <hr>
    <hr>

    <div id="switch">
        <h1>SHOW</h1>
    </div>
@endsection
