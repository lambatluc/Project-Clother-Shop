@extends('layouts.index')
@section('content')

 <!--==================================*
               Main Content Section
    *====================================-->
    

        <!--==================================*
                   Main Section
        *====================================-->
        <div class="main-content-inner">
    
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-12 stretched_card">
                    <div class="card mb-mob-4 icon_card primary_card_bg">
                        <!-- Card body -->
                        <div class="card-body">
                            <p class="card-title mb-0 text-white">Đơn Hàng Trong Tuần</p>
                            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 text-white">5,009</h3>
                                <div class="arrow_icon">
                                    <i class="far fa-arrow-alt-circle-down" style="color: #644fc5;" ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-12 stretched_card">
                    <div class="card mb-mob-4 icon_card success_card_bg">
                        <!-- Card body -->
                        <div class="card-body">
                            <p class="card-title mb-0 text-white">Doanh Thu Tháng</p>
                            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 text-white">94,356</h3>
                                <div class="arrow_icon">
                                    <i class="far fa-arrow-alt-circle-down" style="color: #65cf3f;" ></i>
                                </div>
                            </div>
                            <p class="mb-0 text-white">1.92% <span class="text-white ml-1"><small>(Since last month)</small></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-12 stretched_card">
                    <div class="card mb-mob-4 icon_card warning_card_bg">
                        <!-- Card body -->
                        <div class="card-body">
                            <p class="card-title mb-0 text-white">Đơn Chưa Xác Thực</p>
                            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 text-white">1,253</h3>
                                <div class="arrow_icon">
                                    <i class="far fa-arrow-alt-circle-down" style="color: #ff963b;" ></i>
                                </div>
                            </div>
                            <p class="mb-0 text-white">1.27% <span class="text-white ml-1"><small>(Since last month)</small></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-12 stretched_card">
                    <div class="card mb-mob-4 icon_card info_card_bg">
                        <!-- Card body -->
                        <div class="card-body">
                            <p class="card-title mb-0 text-white">Đang Vận Chuyển</p>
                            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 text-white">5,224</h3>
                                <div class="arrow_icon">
                                    <i class="far fa-arrow-alt-circle-down" style="color: #5272eb;" ></i>
                                </div>
                            </div>
                            <p class="mb-0 text-white">9.12% <span class="text-white ml-1"><small>(Since last day)</small></span></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
            <canvas id="myChart" width="400" height="200"></canvas>
                <div class="col-lg-12 col-md-12 mt-4 stretched_card">
                    <div class="card">
                        <div class="card-body">
                            <div class="card_title d-flex flex-wrap justify-content-between align-items-center">
                                <div>
                                    <h4 class="card_title mb-0">Số Lượng Nhân Viên</h4>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center">
                                        <form>
                                            <div class="form-group w-80 m-0">
                                                <select class="form-control form-control-sm">
                                                    <option>Month</option>
                                                    <option>Yesterday</option>
                                                    <option>Today</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive mt-10">
                                <table class="table table-hover table-center">
                                    <thead>
                                    <tr>
                                        <td class="w-70">Avatar</td>
                                        <td class="w-30p">Name</td>
                                        <td>SL Đơn</td>
                                        <td>Hoạt Động</td>
                                        <td>Date Created</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="avatar avatar-md">
                                                <img src="../assets/images/author/author-img1.jpg" alt="Image" class="img-responsive">
                                            </div>
                                        </td>
                                        <td class="text-nowrap">
                                            <div class="fw-600 ">Denis A. Short </div>
                                        </td>
                                        <td>547</td>
                                        <td>Thường Xuyên</td>
                                      
                                        <td>12-06-2019</td>
                                    </tr>
                            
                             
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
            
        </div>
        <!--==================================*
                   End Main Section
        *====================================-->

@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
@endsection