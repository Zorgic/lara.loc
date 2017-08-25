@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>eCity Group</h1>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion-speedometer"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Холодная вода</span>
                        <span class="info-box-number">{{auth()->user()->lastService('cold_water')->lastCounterData()->counter2 /DB::table('service')->where('id_users',auth()->id())->where('service_name','cold_water')->where('sourse_raw','counter2')->value('koeficient') }}
                            <small>m<sup>3</sup></small></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="ion-speedometer"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Горячая вода</span>
                        <span class="info-box-number">{{auth()->user()->lastService('hot_water')->lastCounterData()->counter3 / DB::table('service')->where('id_users',auth()->id())->where('service_name','hot_water')->where('sourse_raw','counter3')-> value('koeficient') }}
                            <small>m<sup>3</sup></small></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion-speedometer"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Газ</span>
                        <span class="info-box-number">{{auth()->user()->lastService('gas')->lastCounterData()->counter2 /DB::table('service')->where('id_users',auth()->id())->where('service_name','gas')->where('sourse_raw','counter2')-> value('koeficient')}}
                            <small>m<sup>3</sup></small></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion-speedometer"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Всего израсходовано электроэнергии</span>
                        <!--select * from service where id_users=1 and koeficient is not Null-->
                        <span class="info-box-number">{{auth()->user()->lastService('energy')->notNullCounterDataTotae1()->totae1 / DB::table('service')->where('id_users',auth()->id())->where('service_name','energy')->where('sourse_raw','totae1')->value('koeficient') + auth()->user()->lastService('energy')->notNullCounterDataTotae2()->totae2 / DB::table('service')->where('id_users',auth()->id())->where('service_name','energy')->where('sourse_raw','totae2')->value('koeficient') + auth()->user()->lastService('energy')->notNullCounterDataTotae3()->totae3 / DB::table('service')->where('id_users',auth()->id())->where('service_name','energy')->where('sourse_raw','totae3')->value('koeficient')}}
                            <small>KW/h</small></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion-speedometer"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Электроэнергии по первому торифу</span>
                        <!--select * from service where id_users=1 and koeficient is not Null-->
                        <span class="info-box-number">{{auth()->user()->lastService('energy')->notNullCounterDataTotae1()->totae1 / DB::table('service')->where('id_users',auth()->id())->where('service_name','energy')->where('sourse_raw','totae1')->value('koeficient')}}
                            <small>KW/h</small></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion-speedometer"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Электроэнергии по второму торифу</span>
                        <!--select * from service where id_users=1 and koeficient is not Null-->
                        <span class="info-box-number">{{auth()->user()->lastService('energy')->notNullCounterDataTotae2()->totae2 / DB::table('service')->where('id_users',auth()->id())->where('service_name','energy')->where('sourse_raw','totae2')->value('koeficient')}}
                            <small>KW/h</small></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->

            </div>
            <!-- /.col -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion-speedometer"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Расход электроэнергии по торифу(лимит)</span>
                        <!--select * from service where id_users=1 and koeficient is not Null-->
                        <span class="info-box-number">{{auth()->user()->lastService('energy')->notNullCounterDataTotae3()->totae3 / DB::table('service')->where('id_users',auth()->id())->where('service_name','energy')->where('sourse_raw','totae3')->value('koeficient')}}
                            <small>KW/h</small></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!--Table#1-->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>№ устройства</th>
                                    <th>Наименование сервиса</th>
                                    <th>Фамилия (инициалы)</th>
                                    <th>Город</th>
                                    <th>Улица</th>
                                    <th>№ дома</th>
                                    <th>№ квартиры</th>
                                    <th>№ оборудования</th>
                                </tr>
                                @foreach (Auth::user()->services as $service)
                                    <tr>
                                        <td>{{$service->id_users}}</td>
                                        <td>{{$service->dev_addr}}</td>
                                        <td>{{$service->service_name}}</td>
                                        <td>{{$service->for_client_name}}</td>
                                        <td>{{$service->client_city}}</td>
                                        <td>{{$service->client_street}}</td>
                                        <td>{{$service->for_client_bilding}}</td>
                                        <td>{{$service->for_client_room}}</td>
                                        <td>{{$service->for_equipment_number}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div><!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                {{--Table Full DataBase--}}
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Дата</th>
                        <th>№</th>
                        <th>Холодная вода</th>
                        <th>Горячая вода</th>
                        <th>Газ</th>
                        <th>Элек№1</th>
                        <th>Элек№2</th>
                        <th>Элек№3</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Дата</th>
                        <th>№</th>
                        <th>Холодная вода</th>
                        <th>Горячая вода</th>
                        <th>Газ</th>
                        <th>Элек№1</th>
                        <th>Элек№2</th>
                        <th>Элек№3</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach (Auth::user()->services as $service)
                        @foreach ($service->counterDataThisMonth as $counterData)
                            <tr>
                                <td>{{$counterData->rx_time}}</td>
                                <td>{{$counterData->dev_addr}}</td>
                                <td>{{$counterData->counter1}}</td>
                                <td>{{$counterData->counter2}}</td>
                                <td>{{$counterData->counter3}}</td>
                                <td> {{$counterData->totae1}}</td>
                                <td>{{$counterData->totae2}}</td>
                                <td>{{$counterData->totae3}}</td>
                                @endforeach
                                @endforeach
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@stop

@section('css')
@stop

@section('js')

@stop