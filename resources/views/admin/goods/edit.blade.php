@extends('extends.admin')

@section('title', '添加商品')


<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>



@section('content')

    @if (count($errors) > 0)
        <div class="mws-form-message error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style='font-size:16px;list-style:none'>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
     <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 添加商品
                    </div>
                    <br>
                </div>
                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">

                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal" action="/admin/goods/{{$goodsone->id}}" method="post" enctype='multipart/form-data'>
                                 <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label" >商品分类</label>
                                    <div class="am-u-sm-9">
                                        <select name="id" disabled>
                                            <option value="0">顶级分类</option>
                                                @foreach ($cate as $k=>$v)
                                                        <?php 
                                                            $n = substr_count($v->path,',')-1;
                                                        ?>
                                                        <option  value="{{$v->id}}" @if($v->id == $goodsone->tid) selected @endif>{{str_repeat('&nbsp;',$n*7)}}|--{{$v->tname}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">商品名称</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-name" name="gname" value="{{$goodsone->gname}}">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">生产厂家</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-email" name="company" value="{{$goodsone->company}}">
                                    </div>
                                </div>

                         
                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">商品库存</label>
                                    <div class="am-u-sm-9">
                                        <input type="text"  id="user-QQ" name="stock" value="{{$goodsone->stock}}">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">商品原价格</label>
                                    <div class="am-u-sm-9">
                                        <input type="text"  id="user-QQ" name="price"  value="{{$goodsone->price}}">
                                    </div>
                                </div>



                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">商品促销价格</label>
                                    <div class="am-u-sm-9">
                                        <input type="text"  id="user-QQ" name="cheap"  value="{{$goodsone->cheap}}">
                                    </div>
                                </div>


                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">商品图片</label>
                                    <div class="am-u-sm-9">
                                        @foreach($goodspic as $k => $v) 
                                        <img src="{{$v->gpic}}" alt="" width='200' gid="{{$v->id}}">
                                        @endforeach
                                        <input type="file" name='gpic[]' multiple class="fileinput-preview" style="width: 100%; padding-right: 84px;"  placeholder="No file selected...">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">商品文字详情</label>
                                    <div class="am-u-sm-9">
                                        <input type="text"  id="user-QQ" name="gdesc" value="{{$goodsone->gdesc}}">
                                    </div>
                                </div>


                                <!-- <script> -->
                    
                                    <!-- //实例化编辑器
                                    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                                    // var ue = UE.getEditor('editor');
 -->
                                <!-- </script> -->

                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">商品描述</label>
                                    <div class="am-u-sm-9">
                                        <!-- <script id="editor" name='content'  type="text/plain" style="width:800px;height:300px;">{{$goodsone->content}}</script> -->

                                        <textarea class="form-control" rows="3" name="content">{{$goodsone->content}}</textarea>

                                    </div>
                                    
                                </div>
                                
                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">商品状态</label>
                                    <div class="am-u-sm-9">
                                            <input type="radio" name='status' value='1' @if($goodsone->status=='0') checked='checked' @endif > <label>上架</label>
                                            <input type="radio" name='status' value='0' @if($goodsone->status=='1') checked='checked' @endif> <label>下架</label>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">修改提交</button>
                                    </div>
                                </div>

                                {{csrf_field()}}
                                {{method_field('PUT')}}
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