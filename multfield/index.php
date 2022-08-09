

<script language="javascript" type="text/javascript">
<!--

var NumOfRow=0;
var row, cell;
cell=document.createElement('td');
cell.appendChild(document.createTextNode(i+' '+j))
row.appendChild(cell);
function Button1_onclick()
{
NumOfRow++;

// get the refference of the main Div

//===============================================
var mainDiv=document.getElementById('MainDiv');

// create new div that will work as a container
var newDiv=document.createElement('div');
newDiv.setAttribute('id','innerDiv'+NumOfRow);

//create span to contain the text
var newSpan=document.createElement('span');
newSpan.innerHTML="";


// create new textbox for email entry
var newTextBox=document.createElement('TEXTAREA');
newTextBox.type='text';
newTextBox.setAttribute('id','txtAddr'+NumOfRow);
newTextBox.setAttribute('maxlength', 200);
newTextBox.setAttribute('name','box[]');
newTextBox.setAttribute('cols',20);
newTextBox.setAttribute('rows',2);
/*==========================*/
var newTextBox2=document.createElement('TEXTAREA');
newTextBox2.type='text';
newTextBox2.setAttribute('id','txtAddr'+NumOfRow);
newTextBox2.setAttribute('maxlength', 200);
newTextBox2.setAttribute('name','box2[]');
newTextBox2.setAttribute('cols',18);
newTextBox2.setAttribute('rows',2);

var newTextBox3=document.createElement('TEXTAREA');
newTextBox3.type='text';
newTextBox3.setAttribute('id','txtAddr'+NumOfRow);
newTextBox3.setAttribute('maxlength', 200);
newTextBox3.setAttribute('name','box3[]');
newTextBox3.setAttribute('cols',18);
newTextBox3.setAttribute('rows', 2);


var newTextBox4=document.createElement('TEXTAREA');
newTextBox4.type='text';
newTextBox4.setAttribute('id','txtAddr'+NumOfRow);
newTextBox4.setAttribute('maxlength', 200);
newTextBox4.setAttribute('name','box4[]');
newTextBox4.setAttribute('cols',18);
newTextBox4.setAttribute('rows', 2);




/*==========================*/

// create remove button for each email adress

var newButton=document.createElement('input');
newButton.type='button';
newButton.value='Remove['+NumOfRow+']';
newButton.id='btn'+NumOfRow;



// atach event for remove button click
newButton.onclick=function RemoveEntry() { var mainDiv=document.getElementById('MainDiv');
mainDiv.removeChild(this.parentNode);
}

// append the span, textbox and the button
newDiv.appendChild(newSpan);
newDiv.appendChild(newTextBox);
newDiv.appendChild(newTextBox2);
newDiv.appendChild(newTextBox3);
newDiv.appendChild(newTextBox4);

newDiv.appendChild(newButton);

// finally append the new div to the main div
mainDiv.appendChild(newDiv);

}
// -->
</script>
<style type="text/css">
<!--
.style9 {color: #FF0000}
.style11 {
	color: #FFFF66;
	font-style: italic;
}
.style12 {color: #FFFF00}
.style1 {font-size: 10px}
.style2 {	font-size: 12px;
	font-weight: bold;
}
-->
</style>

<form id="form1" name="" method="post" action="">
<h4 align="center">
  <table  border="1">
    <tr>
      <td bgcolor="#3366FF">
	  <h4 align="center">
	  <table  border="0">
        
       
       
		<h2 align="center">
        <tr>
          <td bordercolor="#000066" bgcolor="#99CCCC" >        <div align="center">
            <p>&nbsp;</p>
       <p>week planning</p>
            <p><span class="style2">Add File</span>
                <input name="buttonAdd" type="button" id="Button1" onclick="Button1_onclick()" value="Add More" />
 </p>
            <table  border="1" >
              <tr>
                <th width="140" scope="col"><span class="style1">Product </span></th>
				 <th width="140" scope="col"><span class="style1">Specification </span></th>
                <th width="140" scope="col"><span class="style1">Price</span></th>
                <th width="140" scope="col"><span class="style1">Quantity</span></th>
                
                <th width="140" scope="col"><div align="left" class="style1">Options</div></th>
              </tr>
              <tr>
                <td colspan="7">
                  <div id="MainDiv"> </div>
                  <input name="Send" type="submit" value="Send" />
                </td>
              </tr>
<td> <input name="backhome" type="submit" value="back home" /></td>
            </table>
           
<p>&nbsp;</p>
           
          </div>
        <tr>
          
          
        </table>
      </td>
    </tr>
  </table></td>
    </tr>
  </table>
</form>


<?php @session_start();
if(!isset($_SESSION["email"])){
    header("location:../admin/index.php");
}
if(isset($_POST["backhome"])){
echo "<meta http-equiv='refresh' content='0; url=../admin/home.php'>";
}
?>




