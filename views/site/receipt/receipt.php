<main>
    <!--? slider Area Start-->
    <section class="slider-area slider-area2">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Hóa đơn</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Hóa đơn</a></li>
                                    </ol>
                                </nav>
                                <!-- breadcrumb End -->
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </section>


    <div class="container section-padding40 fix">
            <div class="row justify-content-start">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle  mb-55">
                        <h2>Lịch sử mua khóa học</h2>
                    </div>
                </div>
            </div>
        <?php if($data){?>   
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Mã hóa đơn</th>
                <th scope="col">Ngày mua</th>
                <th scope="col">Khóa học</th>
                <th scope="col">Lớp</th>
                    <th scope="col">Giảng viên</th>
                    <th scope="col">Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <th><?= $data['order_code']?></th>
                        <td><?= $data['order_date']?></td>
                        <td><?= $data['name_course']?></td>
                        <td><?= $data['name_class']?></td>
                        <td><?= $data['name_teacher']?></td>
                        <td>
                            <?php
                                if($data['status'] == 0 ){
                                    echo 'Chưa thanh toán';
                                }
                                elseif ($data['status'] == 1 ){
                                    echo 'Hủy thanh toán';
                                }
                                else {
                                    echo 'Đã thanh toán';
                                }
                            ?>
                        </td>
                    </tr>
            </tbody>
        </table>
        <?php }else{?>
            <h3 class='fst-italic text-danger'>Bạn chưa mua khóa học nào</h3>
        <?php }?>    
    </div>
</main>