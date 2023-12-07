@extends('layout.mainlayout')
@section('title','Jadwal Sholat')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8 col-12 order-lg-0 order-1">
                <h2 class="fw-bold titleIndexMateri">Bulan ini</h2>
                <h6 class="fs-sm subTitle-index">Jadwal adzan bulan ini</h6>
                <hr>
                <div class="card rounded-1" style="overflow: auto; height: 580px;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Shubuh</th>
                                        <th>Dzuhur</th>
                                        <th>Ashr</th>
                                        <th>Magrib</th>
                                        <th>Isya</th>
                                    </tr>
                            </thead>
                                <tbody id="data-jadwal">
                                    @foreach ($jadwal as $data)
                                    <tr>
                                        <td>{{$data['tanggal']}}</td>
                                        <td>{{$data['shubuh']}}</td>
                                        <td>{{$data['dzuhur']}}</td>
                                        <td>{{$data['ashr']}}</td>
                                        <td>{{$data['magrib']}}</td>
                                        <td>{{$data['isya']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 order-lg-1 order-0 mb-3">
                <h2 class="fw-bold titleIndexMateri">Lokasi Anda</h2>
                <h6 class="fs-sm subTitle-index">Pilih kota anda berada</h6>
                <hr>
                <div class="card rounded-1">
                    <div class="card-body">
                        <select name="" id="select-city" class="form-control fs-sm rouned-1">
                            @foreach ($getKota as $data)
                                <option @if($data == 'bogor') selected @endif value="{{$data}}">{{$data}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script>
        $('#select-city').on('change', function(){
            const cityValue = $(this).val()

            $.ajax({
                method: 'GET',
                url: `/al-quran/jadwal-adzan/${cityValue}/city`,
                success: function(response) {
                    const jadwalData = response.success;
                    console.log(jadwalData)

                    // Clear the existing table content
                    $('#data-jadwal').html('');

                    $.each(jadwalData, function(index, data) {
                        $('#data-jadwal').append(`
                            <tr>
                                <td>${data.tanggal}</td>
                                <td>${data.shubuh}</td>
                                <td>${data.dzuhur}</td>
                                <td>${data.ashr}</td>
                                <td>${data.magrib}</td>
                                <td>${data.isya}</td>
                            </tr>
                        `);
                    });


                },
                error: function(error) {
                    console.error('An error occurred:', error);
                }
            });


        })
    </script>
@endpush
