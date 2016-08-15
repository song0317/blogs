$(function () {
    var screenwidth, screenheight, mytop, getPosLeft, getPosTop
    screenwidth = $(window).width();
    screenheight = $(window).height();
    //获取滚动条距顶部的偏移
    mytop = $(document).scrollTop();
    //计算弹出层的left
    getPosLeft = screenwidth / 2 - 200;
    //计算弹出层的top
    getPosTop = screenheight / 2 - 150;
    //css定位弹出层
    $("#divLoginWindow").css({ "left": getPosLeft, "top": getPosTop });
    //当浏览器窗口大小改变时
    $(window).resize(function () {
        screenwidth = $(window).width();
        screenheight = $(window).height();
        mytop = $(document).scrollTop();
        getPosLeft = screenwidth / 2 - 200;
        getPosTop = screenheight / 2 - 150;
        $("#divLoginWindow").css({ "left": getPosLeft, "top": getPosTop + mytop });
    });
    //当拉动滚动条时，弹出层跟着移动
    $(window).scroll(function () {
        screenwidth = $(window).width();
        screenheight = $(window).height();
        mytop = $(document).scrollTop();
        getPosLeft = screenwidth / 2 - 200;
        getPosTop = screenheight / 2 - 150;
        $("#divLoginWindow").css({ "left": getPosLeft, "top": getPosTop + mytop });
    });
    //点击链接弹出登录窗口
    $('#login-btn').click(function () {
        $("#divLoginWindow").fadeIn("slow"); //toggle("slow"); 
        $("#txtUserName").focus();
        //获取页面文档的高度
        var docheight = $(document).height();
        //追加一个层，使背景变灰
        $("body").append("<div id='greybackground'></div>");
        $("#greybackground").css({ "opacity": "0.5", "height": docheight });
        return false;
    });
    //点击关闭按钮
    $("#closeBtn").click(function () {
        $("#divLoginWindow").fadeOut("slow",function(){
            //删除变灰的层
            $("#greybackground").remove();
        }); ////hide();
        return false;
    });
    //点击登录
    $("#login_mask").click(function(){
        var _csrf=$('#_csrf').val();
        var name=$('#name_val').val();
        var pwd=$('#pwd_val').val();
        $.post('index.php?r=welcome/login',{name:name,pwd,pwd,_csrf:_csrf},function(data){
            if(data.status==1){
                var log="<a href='javascript:void(0)' id='login_end'><span>"+name+"</span><span class='out'>退出</span></a>";
                $('#login_save1').html(log);
                //将登录的遮罩层消失
                $("#divLoginWindow").fadeOut("slow",function(){
                    $("#greybackground").remove();
                });
            }else{
                alert(data.img);
            }
        },'json');
    });
    //点击退出
    $('#login_end').click(function(){
        $.get('index.php?r=welcome/login_out',function(data){
            var log="<a href='javascript:void(0)' id='login-btn'><span>登录</span><span class='en'>login</span></a>";
            $('#login_save2').html(log);
        });
    });
});