
$(function () {
//下拉菜单

	$(".lis").hover(function(){
		var index=$(this).index();
		var twolis=$("dd",$(".twonav")[index])
		$(".twonav").eq(index).css("paddingTop",5)
		$(".twonav").eq(index).animate({height:twolis[0].offsetHeight*twolis.length},300)
	},function(){
		var index=$(this).index();
		$(".twonav").eq(index).animate({height:0,padding:0},300)
	});

//banner 轮播图
	setInterval(moves,3000)
	var nums=0;
	function moves() {
		nums++;
		if(nums>=$(".banner img").length){
			nums=0
		}
		$(".banner img").css({opacity:0}).eq(nums).animate({opacity:1})
		$(".btnbox .btns").css("background","#aaa").eq(nums).css("background","#F06F31")
	}

//选项卡
	var jtitle=$(".jituanxw-title")[0]
	var jlis=$("li",jtitle)
	var jcontent=$(".jituanxw-content")

	for (var i = 0; i <3; i++) {
		jlis[i].index=i;
		jlis[i].onmouseover=function(){
			for (var i = 0; i < jcontent.length; i++) {
				jcontent[i].style.display="none";
				jcontent[i].style.opacity=0;
			};
			jcontent[this.index].style.display="block"
			animate(jcontent[this.index],{opacity:1})
		}
	};

//新闻轮播
	var imgxwbox=$(".imgxw-imgs")[0]
	var imgxws=$("img",imgxwbox)
	var imgtitlebox=$(".imgtitlebox")[0]
	var imgtitles=$("li",imgtitlebox)
	var imgbtnbox=$(".imgbtnbox")[0]
	var imgbtns=$("li",imgbtnbox)

	var t=setInterval(imgb,2000)
	var num=4;
	function imgb(){
		num--;
		if (num<0) {
			num=imgxws.length-1;
		};
		for (var i = 0; i < imgxws.length; i++) {
			imgxws[i].style.display="none"
			imgtitles[i].style.display="none"
			imgbtns[i].style.border="1px solid #dedede"
			imgbtns[i].style.background="#bbbab7"
		};

		imgxws[num].style.display="block"
		imgtitles[num].style.display="block"
		imgbtns[num].style.border="1px solid #e63408"
		imgbtns[num].style.background="#f5700c"
	}


	for (var i = 0; i < imgbtns.length; i++) {
		imgbtns[i].index=i;
		imgbtns[i].onclick=function(){
			clearInterval(t)
			for (var j = 0; j < imgxws.length; j++) {
				imgxws[j].style.display="none"
				imgtitles[j].style.display="none"
				imgbtns[j].style.border="1px solid #dedede"
				imgbtns[j].style.background="#bbbab7"
			};
			imgxws[this.index].style.display="block"
			imgtitles[this.index].style.display="block"
			imgbtns[this.index].style.border="1px solid #e63408"
			imgbtns[this.index].style.background="#f5700c"
			t=setInterval(imgb,2000)
		}
	};


//手风琴实现

	var zdfztitle=$(".zdfz-left1 div:first-child")
	var zdfzcontend=$(".zdfz-left-contend")

	function shoufq(zdfztitle,zdfzcontend){
		for (var i = 0; i < zdfztitle.length; i++) {
			zdfztitle[i].index=i;
			zdfztitle[i].onmouseover=function(){
				for (var j = 0; j< zdfztitle.length;j++){
					zdfzcontend[j].style.display="none"
					zdfztitle[j].className="zdfz-left-title2"
				}
				zdfzcontend[this.index].style.display="block"
				this.className="zdfz-left-title1"
			}
		};
	}

	shoufq(zdfztitle,zdfzcontend)

	var zdfzcontend=$(".zdfz-right-contend")[0]
	var zdfztop1=$(".zdfz-right-top",zdfzcontend)
	var zdfzbottom1=$(".zdfz-right-bottom",zdfzcontend)

	function topshoufq(zdfztitle,zdfzcontend){
		for (var i = 0; i < zdfztitle.length; i++) {
			zdfztitle[i].index=i;
			zdfztitle[i].onmouseover=function(){
				for (var j = 0; j< zdfztitle.length;j++){
					zdfzcontend[j].style.display="none"
					zdfzcontend[j].style.opacity=0
				}
				zdfzcontend[this.index].style.display="block"
				animate(zdfzcontend[this.index],{opacity:1},200)
			}
		};
	}

	topshoufq(zdfztop1,zdfzbottom1)

	var zdfzcontend=$(".zdfz-right-contend")[1]
	var zdfztop2=$(".zdfz-right-top",zdfzcontend)
	var zdfzbottom2=$(".zdfz-right-bottom",zdfzcontend)

	var zdfzcontend=$(".zdfz-right-contend")[2]
	var zdfztop3=$(".zdfz-right-top",zdfzcontend)
	var zdfzbottom3=$(".zdfz-right-bottom",zdfzcontend)

	topshoufq(zdfztop2,zdfzbottom2)
	topshoufq(zdfztop3,zdfzbottom3)


// 滚动条事件


	var fixed=$(".fixed")[0]
	window.onscroll=function(){
		var obj=document.documentElement.scrollTop?document.documentElement:document.body;
		var tops=document.documentElement.scrollTop||document.body.scrollTop;
		if (tops>3) {
			fixed.style.display="block"
		}else{
			fixed.style.display="none"
		}

		fixed.onclick=function(){
			animate(obj,{scrollTop:0})
		}
	}


//获取焦点与失去焦点
	var search=$("#search")
	search.focus(function () {
		if (search.val()=="请输入关键字") {
			search.val("");
			search.css("color","#333")
		}
		search.css("width",250)
	})

	search.blur(function () {
		if (search.val()=="") {
			search.val("请输入关键字");
			search.css("color","#CCCCD3")
			search.css("width",170)
		}
	})
	
})

