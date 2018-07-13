@extends('extends.admin')

@section('title', '添加商品')



@section('content')
     <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 表单
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div>


                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal" action="/admin/goods" method="post" >
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">商品名称</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-name" name="gname">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">生产厂家</label>
                                    <div class="am-u-sm-9">
                                        <input type="email" id="user-email" name="company">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">商品详情</label>
                                    <div class="am-u-sm-9">
                                        <input type="tel" id="user-phone" name="descr">
                                    </div>
                                </div>
								
								<div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">商品状态</label>
                                    <div class="am-u-sm-9">
                                        <input type="text"  id="user-QQ" name="status">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">商品库存</label>
                                    <div class="am-u-sm-9">
                                        <input type="text"  id="user-QQ" name="stock">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">商品重量</label>
                                    <div class="am-u-sm-9">
                                        <input type="text"  id="user-QQ" name="kg">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">添加时间</label>
                                    <div class="am-u-sm-9">
                                        <input type="text"  id="user-QQ" name="addtime">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">商品折扣价</label>
                                    <div class="am-u-sm-9">
                                        <input type="text"  id="user-QQ" name="dis">
                                    </div>
                                </div>
                                


                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">商品价格</label>
                                    <div class="am-u-sm-9">
                                        <input type="text"  id="user-QQ" name="price">
                                    </div>
                                </div>


                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">商品图片</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-weibo" name="gurl">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">商品关键字</label>
                                    <div class="am-u-sm-9">
                                        <textarea class="" rows="5" id="user-intro" name="keyword"></textarea>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">添加商品</button>
                                    </div>
                                </div>

                                {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                </div>

            </div>

    
@endsection