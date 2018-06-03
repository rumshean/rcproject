@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body create-form">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <br>

                    <form action="/home" method="post">
                    <table class="MenuClick">
                        <tr>
                            <td>
                                <h1>BNI320</h1>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Norek</th>
                                <th>StartDate</th>
                                <th>EndDate</th>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="norek"/></td>
                                <td><input type="text" class="form-control" name="startdate"/></td>
                                <td><input type="text" class="form-control" name="enddate" /></td>
                             </tr>
                         </tbody>
                       </table>
                       
                       {{ csrf_field() }}
                       <button class="btn btn-primary" type="submit">Execute</button>
                       <button class="btn btn-default" name="submit1">check</button>
                       
                                            
                       </form>
                       <?php
                      
                       if(isset($_POST['submit']))
                       {
                        $norek = $_POST['norek'];
                        $startdate = $_POST['startdate'];
                        $enddate = $_POST['enddate'];
                        $txt = $norek." ".$startdate." ".$enddate."\n";
                        $file = fopen("C:\bni320.txt", "w+");
                        fputs($file,"tet");
                        fclose($file);
                        chmod('bni320.txt', 0755);                   
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection