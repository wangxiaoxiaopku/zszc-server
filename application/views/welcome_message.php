<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $base.'css/bootstrap3.css';?>" />
	<script type="text/javascript" src="<?php echo $base.'js/jquery.js';?>"></script>
	<script type="text/javascript" src="<?php echo $base.'js/bootstrap3.js';?>"></script>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	
	.tags{
    margin:0;
    padding:0;
    list-style:none;
    }
    .tags li, .tags a{
    float:left;
    height:24px;
    line-height:24px;
    position:relative;
    font-size:11px;
    }
    .tags a{
    margin-left:20px;
    padding:0 10px 0 12px;
    background:#0089e0;
    color:#fff;
    text-decoration:none;
    -moz-border-radius-bottomright:4px;
    -webkit-border-bottom-right-radius:4px;    
    border-bottom-right-radius:4px;
    -moz-border-radius-topright:4px;
    -webkit-border-top-right-radius:4px;    
    border-top-right-radius:4px;    
    } 
    .tags a:before{
    content:"";
    float:left;
    position:absolute;
    top:0;
    left:-12px;
    width:0;
    height:0;
    border-color:transparent #0089e0 transparent transparent;
    border-style:solid;
    border-width:12px 12px 12px 0;        
    }
    .tags a:after{
    content:"";
    position:absolute;
    top:10px;
    left:0;
    float:left;
    width:4px;
    height:4px;
    -moz-border-radius:2px;
    -webkit-border-radius:2px;
    border-radius:2px;
    background:#fff;
    -moz-box-shadow:-1px -1px 2px #004977;
    -webkit-box-shadow:-1px -1px 2px #004977;
    box-shadow:-1px -1px 2px #004977;
    }
    .tags a:hover{background:#555;}    

.tags a:hover:before{border-color:transparent #555 transparent transparent;}
	</style>
</head>
<body>
<div style=" position:relative;">
<ul class="tags">
    <li><a href="#">tag</a></li>
    <li><a href="#">tag name aaaa</a></li>

</ul>
 
</div>



	<div style="position:relative;float:left;width:200px;height:35px;line-height:35px;font-size:24px;text-align:center">name</div>
	<div ><input type="text" class="form-control" id="name" style="width:200px;"></div>
	<br>

	<div style="position:relative;float:left;width:200px;height:35px;line-height:35px;font-size:24px;text-align:center">email</div>
	<div ><input type="text" class="form-control" id="email" style="width:200px;"></div>
	<br>

	<div style="position:relative;float:left;width:200px;height:35px;line-height:35px;font-size:24px;text-align:center">pwd</div>
	<div ><input type="text" class="form-control" id="pwd" style="width:200px;"></div>
	<br>

	<div style="position:relative;float:left;width:200px;height:35px;line-height:35px;font-size:24px;text-align:center">real_name</div>
	<div ><input type="text" class="form-control" id="real_name" style="width:200px;"></div>
	<br>

	<div style="position:relative;float:left;width:200px;height:35px;line-height:35px;font-size:24px;text-align:center">item_name</div>
	<div ><input type="text" class="form-control" id="item_name" style="width:200px;"></div>
	<br>

	<div style="position:relative;float:left;width:200px;height:35px;line-height:35px;font-size:24px;text-align:center">item_money</div>
	<div ><input type="text" class="form-control" id="item_money" style="width:200px;"></div>
	<br>

	<div style="position:relative;float:left;width:200px;height:35px;line-height:35px;font-size:24px;text-align:center">item_period</div>
	<div ><input type="text" class="form-control" id="item_period" style="width:200px;"></div>
	<br>

	<div style="position:relative;float:left;width:200px;height:35px;line-height:35px;font-size:24px;text-align:center">item_introduce</div>
	<div ><textarea class="form-control" id="item_introduce" style="width:200px;height:200px;"></textarea></div>
	<br>

	<div style="position:relative;float:left;width:200px;height:35px;line-height:35px;font-size:24px;text-align:center">item_manager</div>
	<div ><input type="text" class="form-control" id="item_manager" style="width:200px;"></div>
	<br>

	<div style="position:relative;float:left;width:200px;height:35px;line-height:35px;font-size:24px;text-align:center">item_manager_addr</div>
	<div ><input type="text" class="form-control" id="item_manager_addr" style="width:200px;"></div>
	<br>

	<div style="position:relative;float:left;width:200px;height:35px;line-height:35px;font-size:24px;text-align:center">item_manager_phone</div>
	<div ><input type="text" class="form-control" id="item_manager_phone" style="width:200px;"></div>
	<br>

	<div style="position:relative;float:left;width:200px;height:35px;line-height:35px;font-size:24px;text-align:center">item_team_name</div>
	<div ><input type="text" class="form-control" id="item_team_name" style="width:200px;"></div>
	<br>

	<div style="position:relative;float:left;width:200px;height:35px;line-height:35px;font-size:24px;text-align:center">item_team_introduce</div>
	<div ><textarea class="form-control" id="item_team_introduce" style="width:200px;height:200px;"></textarea></div>
	<br>

	<div style="position:relative;float:left;width:200px;height:35px;line-height:35px;font-size:24px;text-align:center">item_bank_name</div>
	<div ><input type="text" class="form-control" id="item_bank_name" style="width:200px;"></div>
	<br>
	<div style="position:relative;float:left;width:200px;height:35px;line-height:35px;font-size:24px;text-align:center">item_bank_acount</div>
	<div ><input type="text" class="form-control" id="item_bank_acount" style="width:200px;"></div>
	<br>
	<div style="position:relative;float:left;width:200px;height:35px;line-height:35px;font-size:24px;text-align:center">item_bank_num</div>
	<div ><input type="text" class="form-control" id="item_bank_num" style="width:200px;"></div>
	<br>
	


	<div >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="btn btn-primary" id="btn" style="width:350px;font-size:20px;" value="提&nbsp;&nbsp;交"></div>


</body>
</html>
<script>
	$("#btn").click(function(){
		var url="index.php/item_action/step3"
		$.post(url,
			{
				id:1,
				item_bank_name:$("#item_bank_name").val(),
				item_bank_acount:$("#item_bank_acount").val(),
				item_bank_num:$("#item_bank_num").val()
			},
			function(data,textStatus){
				alert(data);

			});

	});
</script>