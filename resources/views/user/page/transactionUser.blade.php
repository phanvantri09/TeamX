@extends('user.index')
@section('content')
    <section id="transaction">
        <div class="bg-red-pastel">
            <div class="container py-md-4 py-2">
                <h1>Giao dịch</h1>
            </div>
        </div>
        <div class="transaction-wrap">
            <div class="container">
                <h1 class="text-center pb-md-4 pb-2">Vui lòng nhập đầy đủ thông tin giao dịch</h1>
                <div class="row flex-md-row flex-column-reverse">
                    <form class="col-lg-6 col-md-6 col-sm-12 col-12" action="">
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12 col-12">
                                <label for="formGroupExampleInput1">Họ và tên</label>
                                <input type="text" class="form-control" id="formGroupExampleInput1"
                                    placeholder="Vui lòng điền đầy đủ họ tên của bạn">
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-12">
                                <label for="formGroupExampleInput2">Số điện thoại</label>
                                <input type="tel" class="form-control" id="formGroupExampleInput2"
                                    placeholder="Vui lòng điền đúng sdt của bạn">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12 col-12">
                                <label for="inputState">Dịch vụ</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Chọn dịch vụ</option>
                                    <option>1</option>
                                    <option>3</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-12">
                                <label for="formGroupExampleInput">Link buff</label>
                                <input type="url" class="form-control" id="formGroupExampleInput"
                                    placeholder="Vui lòng điền đúng link page bạn cần buff">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput5">Hình ảnh chuyển tiền</label>
                            <div class="file-drop-area">
                                <span class="choose-file-button">Chọn Files</span>
                                <span class="file-message">Kéo hoặc thả file vào đây</span>
                                <input type="file" class="file-input" accept=".jfif,.jpg,.jpeg,.png,.gif" multiple>
                            </div>

                            <div id="divImageMediaPreview">

                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Submit form</button>


                    </form>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center">
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
            </div>
        </div>
    </section>
    <script>
        $(document).on('change', '.file-input', function() {


            var filesCount = $(this)[0].files.length;

            var textbox = $(this).prev();

            if (filesCount === 1) {
                var fileName = $(this).val().split('\\').pop();
                textbox.text(fileName);
            } else {
                textbox.text(filesCount + ' files selected');
            }



            if (typeof(FileReader) != "undefined") {
                var dvPreview = $("#divImageMediaPreview");
                dvPreview.html("");
                $($(this)[0].files).each(function() {
                    var file = $(this);
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var img = $("<img />");
                        img.attr("style", "width: 250px; height:auto; padding: 10px 0;");
                        img.attr("src", e.target.result);
                        dvPreview.append(img);
                    }
                    reader.readAsDataURL(file[0]);
                });
            } else {
                alert("This browser does not support HTML5 FileReader.");
            }


        });
    </script>
@endsection
