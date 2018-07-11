@extends('extends.admin')

@section('title','添加轮播')

@section('content')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 轮播添加
        </div>
      

    </div>

    <div class="tpl-block">
            @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" action="/admin/lunbo/{{$lunbo->lid}}" method="post" enctype="multipart/form-data">
                		{{csrf_field()}}
                        {{ method_field('PUT') }}
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title">Title</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" value="{{$lunbo->title}}" name="title" class="tpl-form-input" id="user-name" placeholder="请输入标题文字">
                            <small>请填写标题文字10-20字左右。</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-email" class="am-u-sm-3 am-form-label">发布时间 <span class="tpl-form-line-small-title">Time</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" value="{{$lunbo->addtime}}" name="addtime" class="am-form-field tpl-form-no-bg" placeholder="发布时间" data-am-datepicker="" readonly="">
                            <small>发布时间为必填</small>
                        </div>
                    </div>

                    

               

                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">封面图 
                        	<span class="tpl-form-line-small-title">Images</span>
                        </label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                	<input type="file" name="url[]" id="file" accept="image/*" multiple onchange="imgChange(this);"/>
                                	 <!--文件上传选择按钮-->

										<div id="preview">
                                        @foreach($lunbo->url as $k=>$v)
										<img id="imghead"src="{{$v}}" />
                                        @endforeach
                                		</div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
									<i class="am-icon-cloud-upload"></i> 添加封面图片</button>
                                
                            </div>

                        </div>
                    </div>
                    <script type="text/javascript">
					     // 选择图片显示
						function imgChange(obj) {
						//获取点击的文本框
						var file =document.getElementById("file");
						// console.log(file);
						var imgUrl =window.URL.createObjectURL(file.files[0]);
						var img =document.getElementById('imghead');
						img.setAttribute('src',imgUrl); // 修改img标签src属性值
						};

                    </script>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">状态 <span class="tpl-form-line-small-title">status</span></label>
                        <div class="am-u-sm-9">
                            <input type="radio" name="status" value="1"<?php if ($lunbo->status==1): ?>
                                checked
                            <?php endif ?> class="tpl-form-input">
                            <small>关闭</small>
                            <input type="radio" name="status" value="2" <?php if ($lunbo->status==2 ): ?>
                                checked
                            <?php endif ?> class="tpl-form-input" >
                            <small>开启</small>
                        </div>
                    </div>
                   
                   
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


</div>
@endsection
@section('js')
<script type="text/javascript">
    
    /*setTimeout(function(){

        $('.mws-form-message').remove();

    },3000)*/

    $('.mws-form-message').fadeOut(2000);

</script>
@endsection