<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	</head>
	<?php
		include_once 'Common.php';
		//获取订单号
		$p0_Cmd="Buy";                            //业务类型
		$p1_MerId="10001126856";                  //商户编号     
		$p2_Order=$_REQUEST['p2_Order'];          //商户订单号
		$p3_Amt=$_REQUEST['p3_Amt'];              //支付金额
		$p4_Cur="CNY";                            //交易币种
		$p5_Pid="";                               //商品名称
		$p6_Pcat="";                              //商品种类
		$p7_Pdesc="";                             //商品介绍
		$p8_Url="http://localhost/pay/res.php";   //商户接收支付成功数据的地址
		$p9_SAF="0";                              //送货地址
		$pa_MP="";                                //商户扩展信息
		$pd_FrpId=$_REQUEST['pd_FrpId'];          //支付通道编码
		$pr_NeedResponse="1";                     //应答机制


		//拼接请求参数
		$data="";
		$data=$data.$p0_Cmd;
		$data=$data.$p1_MerId;
		$data=$data.$p2_Order;
		$data=$data.$p3_Amt;
		$data=$data.$p4_Cur;
		$data=$data.$p5_Pid;
		$data=$data.$p6_Pcat;
		$data=$data.$p7_Pdesc;
		$data=$data.$p8_Url;
		$data=$data.$p9_SAF;
		$data=$data.$pa_MP;
		$data=$data.$pd_FrpId;
		$data=$data.$pr_NeedResponse;

		//易宝密钥
		$merchantKey	= "69cl522AV6q613Ii4W6u8K6XuW8vM1N6bFgyv769220IuYe9u37N4y7rI4Pl";
	?>
	您的订单号是<?php echo $p2_Order; ?>,应支付的金额为<?php echo $p3_Amt; ?>元

	<!--易宝支付的URL请求地址-->
	<form action="https://www.yeepay.com/app-merchant-proxy/node" method="post">
	<!--用隐藏域隐藏要提交的数据-->
	<input type="hidden" name="p0_Cmd" value="<?php echo $p0_Cmd;?>"/>
	<input type="hidden" name="p1_MerId" value="<?php echo $p1_MerId; ?>"/>
	<input type="hidden" name="p2_Order" value="<?php echo $p2_Order; ?>"/>
	<input type="hidden" name="p3_Amt" value="<?php echo $p3_Amt; ?>"/>
	<input type="hidden" name="p4_Cur" value="<?php echo $p4_Cur;?>"/>
	<input type="hidden" name="p5_Pid" value="<?php echo $p5_Pid?>"/>
	<input type="hidden" name="p6_Pcat" value="<?php echo $p6_Pcat;?>"/>
	<input type="hidden" name="p7_Pdesc" value="<?php echo $p7_Pdesc;?>"/>
	<input type="hidden" name="p8_Url" value="<?php echo $p8_Url;?>"/>
	<input type="hidden" name="p9_SAF" value="<?php echo $p9_SAF;?>"/>
	<input type="hidden" name="pa_MP" value="<?php echo $pa_MP;?>"/>
	<input type="hidden" name="pd_FrpId" value="<?php echo $pd_FrpId;?>"/>
	<input type="hidden" name="pr_NeedResponse" value="<?php echo $pr_NeedResponse;?>"/>
	<input type="hidden" name="hmac" value="<?php echo $hmac;?>"/>

	<input type="submit" value="确认网上支付" />
</form>
</html>