<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-11 00:15:01
  from 'C:\xampp\htdocs\smarty\mydemo\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb87ce5232441_81093701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '358a87931408943a8839038bc000d1d6f319dcd7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\mydemo\\templates\\index.tpl',
      1 => 1589040684,
      2 => 'file',
    ),
    '9ef8b8aec2a6143d73b5000a2d74e886e9f00077' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\mydemo\\templates\\header.tpl',
      1 => 1551336140,
      2 => 'file',
    ),
    'a7ecd50f4024fd43ea6dae63e32ff4dd615e16d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\mydemo\\templates\\footer.tpl',
      1 => 1551336140,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5eb87ce5232441_81093701 (Smarty_Internal_Template $_smarty_tpl) {
?>
<HTML>
<HEAD>
<TITLE>foo - <br />
<b>Notice</b>:  Undefined index: Name in <b>C:\xampp\htdocs\smarty\mydemo\templates_c\9ef8b8aec2a6143d73b5000a2d74e886e9f00077_0.file.header.tpl.cache.php</b> on line <b>29</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\smarty\mydemo\templates_c\9ef8b8aec2a6143d73b5000a2d74e886e9f00077_0.file.header.tpl.cache.php</b> on line <b>29</b><br />
</TITLE>
</HEAD>
<BODY bgcolor="#ffffff">

<PRE>

    <b>                Title: Welcome To Smarty!
        </b>
    The current date and time is 2020-05-11 00:15:01

    The value of global assigned variable $SCRIPT_NAME is /smarty/mydemo/index.php

    Example of accessing server environment variable SERVER_NAME: localhost

    The value of {$Name} is <b><br />
<b>Notice</b>:  Undefined index: Name in <b>C:\xampp\htdocs\smarty\mydemo\templates_c\358a87931408943a8839038bc000d1d6f319dcd7_0.file.index.tpl.cache.php</b> on line <b>50</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\smarty\mydemo\templates_c\358a87931408943a8839038bc000d1d6f319dcd7_0.file.index.tpl.cache.php</b> on line <b>50</b><br />
</b>

variable modifier example of {$Name|upper}

<b><br />
<b>Notice</b>:  Undefined index: Name in <b>C:\xampp\htdocs\smarty\mydemo\templates_c\358a87931408943a8839038bc000d1d6f319dcd7_0.file.index.tpl.cache.php</b> on line <b>55</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\smarty\mydemo\templates_c\358a87931408943a8839038bc000d1d6f319dcd7_0.file.index.tpl.cache.php</b> on line <b>55</b><br />
</b>


An example of a section loop:

            none
    
    An example of section looped key values:

        <p>

        testing strip tags
        <table border=0><tr><td><A HREF="/smarty/mydemo/index.php"><font color="red">This is a test </font></A></td></tr></table>

</PRE>

This is an example of the html_select_date function:

<form>
    <select name="Date_Month">
<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05" selected="selected">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<select name="Date_Day">
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11" selected="selected">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="Date_Year">
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
</select>
</form>

This is an example of the html_select_time function:

<form>
    <select name="Time_Hour">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12" selected="selected">12</option>
</select>
<select name="Time_Minute">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15" selected="selected">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>
<select name="Time_Second">
<option value="00">00</option>
<option value="01" selected="selected">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>
<select name="Time_Meridian">
<option value="am">AM</option>
<option value="pm">PM</option>
</select>
</form>

This is an example of the html_options function:

<form>
    <select name=states>
        <br />
<b>Notice</b>:  Undefined index: option_values in <b>C:\xampp\htdocs\smarty\mydemo\templates_c\358a87931408943a8839038bc000d1d6f319dcd7_0.file.index.tpl.cache.php</b> on line <b>137</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\smarty\mydemo\templates_c\358a87931408943a8839038bc000d1d6f319dcd7_0.file.index.tpl.cache.php</b> on line <b>137</b><br />
<br />
<b>Notice</b>:  Undefined index: option_output in <b>C:\xampp\htdocs\smarty\mydemo\templates_c\358a87931408943a8839038bc000d1d6f319dcd7_0.file.index.tpl.cache.php</b> on line <b>137</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\smarty\mydemo\templates_c\358a87931408943a8839038bc000d1d6f319dcd7_0.file.index.tpl.cache.php</b> on line <b>137</b><br />

    </select>
</form>

</BODY>
</HTML>
<?php }
}
