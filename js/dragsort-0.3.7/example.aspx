﻿<%@ Page Language="C#" AutoEventWireup="true" CodeFile="example.aspx.cs" Inherits="example" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="dragsort-0.3.7.min.js"></script>
	<style type="text/css">
		body { font-family: Arial; font-size:12pt; padding:20px; width: 800px; margin:auto; border:solid 1px black; padding-top: 20px; margin-top:20px; }
		h1 { font-size: 16pt; }
		h2 { font-size: 13pt; }
		ul { width:350px; list-style-type: none; margin:0px; padding:0px; }
		li { float:left; padding:5px; width:100px; height:100px; }
		li div { width:90px; height:50px; border:solid 1px black; background-color:#E0E0E0; text-align:center; padding-top:40px; }
		.placeHolder div { background-color: white !important; border: dashed 1px gray !important; }
	</style>
</head>
<body>
    <form id="form1" runat="server">
    <div>
        
        <h1>jQuery List DragSort ASP.NET Example</h1>
	    
	    <a href="http://dragsort.codeplex.com/">Homepage</a><br/>
	    <br/>
        
        <h2>Save list order with ajax:</h2>
        
        <ul id="gallery">
            <asp:Repeater ID="Gallery" runat="server">
                <ItemTemplate>
                    <li itemID='<%# Container.ItemIndex %>'>
                        <div><%# Container.DataItem %></div>
                    </li>
                </ItemTemplate>
            </asp:Repeater>
		</ul>
		
		<script type="text/javascript">
		    $("#gallery").dragsort({ dragSelector: "li div", dragEnd: saveOrder, placeHolderTemplate: "<div></div>" });

		    function saveOrder() {
		        var serialStr = "";
		        $("#gallery li").each(function(i, elm) { serialStr += (i > 0 ? "|" : "") + $(elm).attr("itemID"); });
		        $.ajax({ url: "example.aspx/SaveListOrder", data: '{"ids":"' + serialStr + '"}', dataType: "json", type: "POST", contentType: "application/json; charset=utf-8" });
		    };
	    </script>
        
        <div style="clear:both;"></div>
    </div>
    </form>
</body>
</html>
