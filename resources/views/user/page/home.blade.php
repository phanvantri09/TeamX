@extends('user.index')
@section('content')
<section id="hero">
    <div class="container">
        <div class="row d-flex flex-md-row flex-column-reverse">
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 m-auto py-md-4 py-1">
                <h3 class="text-red"><b>Tên Web abc</b></h3>
                <h1>DỊCH VỤ BUFF GIÁ RẺ</h1>
                <h2>Uy Tín $ Chất Lượng</h2>
                <p>4000+ đơn hàng tính đến hiện tại</p>
                <h4>Liện hệ trực tiếp tới:</h4>
                <div class="d-flex social_media_logo justify-content-md-start justify-content-center">
                    <a href=""><img src="image/Telegram_logo.webp" alt=""></a>
                    <a href=""><img src="image/2023_Facebook_icon.svg.png" alt=""></a>
                    <a href=""><img src="image/Icon_of_Zalo.png" alt=""></a>
                </div>
                <a href="">
                    <button
                        class="btn bg-red text-white font-weight-bold rounded-pill mt-2 py-md-3 px-md-4 py-2">XEM
                        NGAY</button>
                </a>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                <div class="banner_img d-flex">
                    <div class="left_side_icons">
                        <img src="./image/Emoji_1_qmgukx.png" class="hero_icon icon1" alt="">
                        <img src="./image/Emoji_2_ncvqfp.png" class="hero_icon icon2" alt="">
                        <img src="./image/tinter.png" class="hero_icon icon3" alt="">
                        <img src="./image/Emoji_4_mjifxt.png" class="hero_icon icon4" alt="">
                        <img src="./image/Emoji_5_pcvnhq.png" class="hero_icon icon5" alt="">
                    </div>
                    <div class="banner_main_img">
                        <img src="./image/hero-banner.webp" alt="">
                    </div>
                    <div class="right_side_icons">
                        <img src="./image/Emoji_6_ooql19.png" class="hero_icon icon6" alt="">
                        <img src="./image/Emoji_7_iruoo8.png" class="hero_icon icon7" alt="">
                        <img src="./image/Emoji_8_fkrpkp.png" class="hero_icon icon8" alt="">
                        <img src="./image/Emoji_9_kvoomm.png" class="hero_icon icon9" alt="">
                        <img src="./image/Emoji_10_xlfvnd.png" class="hero_icon icon10" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 py-2">
                <div class="stat-wrap d-flex flex-column align-items-center text-center py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-calendar-fill pt-1" viewBox="0 0 16 16">
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5z" />
                    </svg>
                    <div class="stat-desc pt-3">
                        <h4>0.14 GIÂY</h4>
                        <p>Đặt hàng dễ dàng</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 py-2">
                <div class="stat-wrap d-flex flex-column align-items-center text-center py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                    </svg>
                    <div class="stat-desc pt-3">
                        <h4>4000+</h4>
                        <p>Đơn đặt hàng</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 py-2">
                <div class="stat-wrap d-flex flex-column align-items-center text-center py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-tags-fill" viewBox="0 0 16 16">
                        <path
                            d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                        <path
                            d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z" />
                    </svg>
                    <div class="stat-desc pt-3">
                        <h4>100.000 VNĐ</h4>
                        <p>Giá chỉ từ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="whySec">
    <div class="container text-center">
        <h1 class="p-5">Tại sao chọn abc là lựa chọn tốt nhất</h1>
        <div class="row pb-5">
            <div class="why_item col-lg-4 col-md-4 col-sm-12 col-12 py-4">
                <div class="why_item_wrap py-2 px-5 text-center bg-white">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                            class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z" />
                        </svg>
                    </div>
                    <div class="py-3">
                        <h2>Hỗ trợ 24/7</h2>
                        <p>Chúng tôi có nhóm hỗ trợ khách hàng 24/7 sẵn sàng trợ giúp mọi thắc mắc của bạn</p>
                    </div>
                </div>
            </div>
            <div class="why_item col-lg-4 col-md-4 col-sm-12 col-12 py-4">
                <div class="why_item_wrap py-2 px-5 text-center bg-white">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                            class="bi bi-award-fill" viewBox="0 0 16 16">
                            <path
                                d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z" />
                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                        </svg>
                    </div>
                    <div class="py-3">
                        <h2>Giá rẻ</h2>
                        <p>abc cung cấp dịch vụ giá rẻ nhất trên thị trường....</p>
                    </div>
                </div>
            </div>
            <div class="why_item col-lg-4 col-md-4 col-sm-12 col-12 py-4">
                <div class="why_item_wrap py-2 px-5 text-center bg-white">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                            class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                            <path
                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                        </svg>
                    </div>
                    <div class="py-3">
                        <h2>Hỗ trợ 24/7</h2>
                        <p>Chúng tôi có nhóm hỗ trợ khách hàng 24/7 sẵn sàng trợ giúp mọi thắc mắc của bạn</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="deafultSec1">
    <div class="container py-md-5 py-3">
        <div class="row">
            <div class="deafultSec_item col-md-6 col-sm-12 col-12 text-md-left text-center my-auto">
                <h1 class="py-3"> Header Header Header Header Header Header Header Header Header Header Header</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, in explicabo. Tempore
                    assumenda enim incidunt officiis unde. Nostrum velit dolores similique exercitationem, ipsam ex
                    reiciendis adipisci odio laboriosam eius quidem?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere odit, animi magnam a sequi
                    molestiae architecto odio dolore ut voluptatibus, exercitationem temporibus consequatur? Aliquam
                    accusantium impedit qui dignissimos unde distinctio!</p>
            </div>
            <div class="deafultSec_item col-md-6 col-sm-12 col-12 py-5">
                <img src="./image/dashboard_laptop.png" alt="">
            </div>
        </div>
    </div>
</section>

<section id="paymentSec">
    <div class="container py-md-5 py-3 text-center">
        <h3 class="text-red">abc Chấp nhận</h3>
        <h1>Nhiều phương thức thanh toán</h1>
        <div class="payment_icon d-flex justify-content-between align-items-center py-5">
            <div class="col-md-2 p-2">
                <img src="./image/logo_vnpay.png" alt="">
            </div>
            <div class="col-md-2 p-2">
                <img src="./image/logo_momo.png" alt="">
            </div>
            <div class="col-md-2 p-2">
                <img src="./image/logo_paypal.png" alt="">
            </div>
            <div class="col-md-2 p-2">
                <img src="./image/logo_zalopay.png" alt="">
            </div>
        </div>
    </div>
</section>

<section id="deafultSec2">
    <div class="container py-md-5 py-3">
        <div class="row">
            <div class="deafultSec2_item col-md-6 col-sm-12 col-12 py-5">
                <img src="./image/top-img.webp" alt="">
            </div>
            <div class="deafultSec2_item col-md-6 col-sm-12 col-12 text-md-left text-center my-auto">
                <h1 class="py-3">BUFF Giá Rẻ nhất thị trường</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, in explicabo. Tempore
                    assumenda enim incidunt officiis unde. Nostrum velit dolores similique exercitationem, ipsam ex
                    reiciendis adipisci odio laboriosam eius quidem?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere odit, animi magnam a sequi
                    molestiae architecto odio dolore ut voluptatibus, exercitationem temporibus consequatur? Aliquam
                    accusantium impedit qui dignissimos unde distinctio!</p>

                <a href="">
                    <button
                        class="btn bg-red text-white font-weight-bold rounded-pill mt-2 py-md-3 px-md-4 py-2">LIÊN
                        HỆ NGAY</button>
                </a>

            </div>
        </div>
    </div>
</section>

<section id="feedback">
    <div class="container-fluid py-md-5 py-3">
        <h1 class="py-3 text-center">Feedback của khách hàng ABC</h1>
        <div class="centerrr">
            <div class="feedback_item p-md-4 p-3">
                <div class="p-md-5 p-2 bg-feedback-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                        class="bi bi-bookmark-heart text-danger" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z" />
                        <path
                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                    </svg>
                    <p class="pt-3 pb-md-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, iste.
                        Quia, eius. Quia illo
                        ipsam assumenda, consequuntur similique corrupti dicta eius, sed accusantium quidem placeat
                        beatae, dignissimos rem animi quae!</p>
                    <div class="rating-star py-2">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <h4>Bé Oăn xinh đẹp</h4>
                </div>
            </div>
            <div class="feedback_item p-md-4 p-3">
                <div class="p-md-5 p-2 bg-feedback-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                        class="bi bi-bookmark-heart text-danger" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z" />
                        <path
                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                    </svg>
                    <p class="pt-3 pb-md-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, iste.
                        Quia, eius. Quia illo
                        ipsam assumenda, consequuntur similique corrupti dicta eius, sed accusantium quidem placeat
                        beatae, dignissimos rem animi quae!</p>
                    <div class="rating-star py-2">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <h4>Bé Oăn xinh đẹp</h4>
                </div>
            </div>
            <div class="feedback_item p-md-4 p-3">
                <div class="p-md-5 p-2 bg-feedback-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                        class="bi bi-bookmark-heart text-danger" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z" />
                        <path
                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                    </svg>
                    <p class="pt-3 pb-md-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, iste.
                        Quia, eius. Quia illo
                        ipsam assumenda, consequuntur similique corrupti dicta eius, sed accusantium quidem placeat
                        beatae, dignissimos rem animi quae!</p>
                    <div class="rating-star py-2">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <h4>Bé Oăn xinh đẹp</h4>
                </div>
            </div>
            <div class="feedback_item p-md-4 p-3">
                <div class="p-md-5 p-2 bg-feedback-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                        class="bi bi-bookmark-heart text-danger" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z" />
                        <path
                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                    </svg>
                    <p class="pt-3 pb-md-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, iste.
                        Quia, eius. Quia illo
                        ipsam assumenda, consequuntur similique corrupti dicta eius, sed accusantium quidem placeat
                        beatae, dignissimos rem animi quae!</p>
                    <div class="rating-star py-2">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <h4>Bé Oăn xinh đẹp</h4>
                </div>
            </div>
            <div class="feedback_item p-md-4 p-3">
                <div class="p-md-5 p-2 bg-feedback-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                        class="bi bi-bookmark-heart text-danger" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z" />
                        <path
                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                    </svg>
                    <p class="pt-3 pb-md-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, iste.
                        Quia, eius. Quia illo
                        ipsam assumenda, consequuntur similique corrupti dicta eius, sed accusantium quidem placeat
                        beatae, dignissimos rem animi quae!</p>
                    <div class="rating-star py-2">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <h4>Bé Oăn xinh đẹp</h4>
                </div>
            </div>
            <div class="feedback_item p-md-4 p-3">
                <div class="p-md-5 p-2 bg-feedback-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                        class="bi bi-bookmark-heart text-danger" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z" />
                        <path
                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                    </svg>
                    <p class="pt-3 pb-md-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, iste.
                        Quia, eius. Quia illo
                        ipsam assumenda, consequuntur similique corrupti dicta eius, sed accusantium quidem placeat
                        beatae, dignissimos rem animi quae!</p>
                    <div class="rating-star py-2">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <h4>Bé Oăn xinh đẹp</h4>
                </div>
            </div>
            <div class="feedback_item p-md-4 p-3">
                <div class="p-md-5 p-2 bg-feedback-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                        class="bi bi-bookmark-heart text-danger" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z" />
                        <path
                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                    </svg>
                    <p class="pt-3 pb-md-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, iste.
                        Quia, eius. Quia illo
                        ipsam assumenda, consequuntur similique corrupti dicta eius, sed accusantium quidem placeat
                        beatae, dignissimos rem animi quae!</p>
                    <div class="rating-star py-2">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <h4>Bé Oăn xinh đẹp</h4>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="deafultSec3">
    <div class="container py-1">
        <div class="row">
            <div class="deafultSec3_item col-md-6 col-sm-12 col-12 text-md-left text-center my-auto">
                <h1 class="py-3">Xem ngay các dịch vụ bên abc</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, in explicabo. Tempore
                    assumenda enim incidunt officiis unde. Nostrum velit dolores similique exercitationem, ipsam ex
                    reiciendis adipisci odio laboriosam eius quidem?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere odit, animi magnam a sequi
                    molestiae architecto odio dolore ut voluptatibus, exercitationem temporibus consequatur? Aliquam
                    accusantium impedit qui dignissimos unde distinctio!</p>

                <a href="">
                    <button
                        class="btn bg-red text-white font-weight-bold rounded-pill mt-2 py-md-3 px-md-4 py-2">XEM NGAY</button>
                </a>

            </div>
            <div class="deafultSec3_item col-md-6 col-sm-12 col-12 py-5">
                <img src="./image/2.png" alt="">
            </div>
        </div>
    </div>
</section>
@endsection
