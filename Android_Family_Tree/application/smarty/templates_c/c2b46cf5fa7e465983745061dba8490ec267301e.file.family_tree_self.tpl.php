<?php /* Smarty version Smarty-3.1.19, created on 2016-02-29 16:08:44
         compiled from "../../Family_Tree/application/smarty/templates/family_tree_self.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122485871256d3ec8f5ae517-98379766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2b46cf5fa7e465983745061dba8490ec267301e' => 
    array (
      0 => '../../Family_Tree/application/smarty/templates/family_tree_self.tpl',
      1 => 1456729697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122485871256d3ec8f5ae517-98379766',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56d3ec8f7ac3f1_20319332',
  'variables' => 
  array (
    'selfFamilyName' => 0,
    'selfName' => 0,
    'spouseFamilyName' => 0,
    'brotheroneFamilyName' => 0,
    'brothertwoFamilyName' => 0,
    'brotherthreeFamilyName' => 0,
    'childoneFamilyName' => 0,
    'childtwoFamilyName' => 0,
    'childthreeFamilyName' => 0,
    'childfourFamilyName' => 0,
    'customerId' => 0,
    'birthday' => 0,
    'fatherFamilyName' => 0,
    'fatherBirthday' => 0,
    'matherFamilyName' => 0,
    'matherBirthday' => 0,
    'spouseBirthday' => 0,
    'brotheroneBirthday' => 0,
    'brothertwoBirthday' => 0,
    'brotherthreeBirthday' => 0,
    'childoneBirthday' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d3ec8f7ac3f1_20319332')) {function content_56d3ec8f7ac3f1_20319332($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
    <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>

    <style type="text/css">

body{

}

div.Box {
width: 1280px;
}

div.Box div {
width: 50px;
height: 70px;
background-color: #f5f5f5;
float: left;
font-size: 7px;
border: 1px #ccc solid;
background-repeat: no-repeat;
background-position: right bottom;
background-size:40px 40px;


}

.clearLeft {
clear: left;
}

/*テスト*/
.spouse{
/*    display: none;
*/}

.sister_1{
    /*display: none; */   
}

</style>

</head>
<body>
 
<div data-role="page" id="top">
    <!-- ヘッダー -->
    <div data-role="header" data-theme="f">
        <h1></h1>
<!--         <span style="float:center; margin-right:30px;"><a href="#add">追加</a></span>
 -->    
        <a style= "float:right;" href="#add" data-role="button" data-icon="plus">追加</a>
    </div>
 
    <!-- コンテンツ -->
    <div data-role="content">
        <div class="Box">
        <!-- 自分 -->
<div style="background-color: #ffc0cb; background-image: url(../imges/Entypo.png);">
    <span style="font-size:10px;">
        自分<br>
    </span>
    <span style="font-size:10px;">
<?php if (!empty($_smarty_tpl->tpl_vars['selfFamilyName']->value)==false) {?>
        <a href="#self_insert">情報追加</a>
<?php }?>
<?php if (empty($_smarty_tpl->tpl_vars['selfFamilyName']->value)==false) {?>
        <a href="#self_change"><?php echo $_smarty_tpl->tpl_vars['selfName']->value;?>
</a>
<?php }?>
    </span>
</div>

        </div>

    </div><!-- 全体 -->
 
    <!-- フッター -->
    <div data-role="footer" data-theme="f">
        <h1></h1>
    </div>
</div>

<!-- 　　　　　　　　　　　　追加処理　　　　　　　　　　　　　　　　 -->
<div data-role="page" id="add">
    <div data-role="header" data-theme="f">
        <h1>情報追加</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
        <div data-role="controlgroup">

        <!-- 配偶者 -->
        <?php if (!empty($_smarty_tpl->tpl_vars['spouseFamilyName']->value)==false) {?>
        <a href="#spouse_insert" data-role="button" data-icon="gear">配偶者</a>
        <?php }?>

        <!-- 兄弟姉妹 -->
        <?php if (!empty($_smarty_tpl->tpl_vars['brotheroneFamilyName']->value)==false) {?>
        <a href="#brotherone_insert" data-role="button" data-icon="gear">兄弟姉妹</a>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['brothertwoFamilyName']->value)==false) {?>
        <a href="#brothertwo_insert" data-role="button" data-icon="gear">兄弟姉妹</a>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['brotherthreeFamilyName']->value)==false) {?>
        <a href="#brotherthree_insert" data-role="button" data-icon="gear">兄弟姉妹</a>
        <?php }?>

        <!-- 子供 -->
        <?php if (!empty($_smarty_tpl->tpl_vars['childoneFamilyName']->value)==false) {?>
        <a href="#childone_insert" data-role="button" data-icon="gear">子供</a>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['childtwoFamilyName']->value)==false) {?>
        <a href="#childtwo_insert" data-role="button" data-icon="gear">子供</a>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['childthreeFamilyName']->value)==false) {?>
        <a href="#childthree_insert" data-role="button" data-icon="gear">子供</a>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['childfourFamilyName']->value)==false) {?>
        <a href="#childfour_insert" data-role="button" data-icon="gear">子供</a>
        <?php }?>
        </div>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>



<!-- 　　　　　　　　　　　　削除処理　　　　　　　　　　　　　　　　 -->


<div data-role="page" id="delete">
    <div data-role="header" data-theme="f">
        <h1>情報追加</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
        <div data-role="controlgroup">
        <?php if (empty($_smarty_tpl->tpl_vars['spouseFamilyName']->value)==false) {?>
        <a href="#spouse_delete" data-role="button" data-icon="gear">配偶者</a>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['brotheroneFamilyName']->value)==false&&empty($_smarty_tpl->tpl_vars['brothertwoFamilyName']->value)==false&&empty($_smarty_tpl->tpl_vars['brotherthreeFamilyName']->value)==false) {?>
        <a href="#brotherone_insert" data-role="button" data-icon="gear">兄弟姉妹</a>
        <?php }?>
        <?php if (empty($_smarty_tpl->tpl_vars['brotheroneFamilyName']->value)==false&&!empty($_smarty_tpl->tpl_vars['brothertwoFamilyName']->value)==false&&empty($_smarty_tpl->tpl_vars['brotherthreeFamilyName']->value)==false) {?>
        <a href="#brothertwo_insert" data-role="button" data-icon="gear">兄弟姉妹</a>
        <?php }?>
        <?php if (empty($_smarty_tpl->tpl_vars['brotheroneFamilyName']->value)==false&&empty($_smarty_tpl->tpl_vars['brothertwoFamilyName']->value)==false&&!empty($_smarty_tpl->tpl_vars['brotherthreeFamilyName']->value)==false) {?>
        <a href="#brotherthree_insert" data-role="button" data-icon="gear">兄弟姉妹</a>
        <?php }?>
        <?php if (empty($_smarty_tpl->tpl_vars['spouseFamilyName']->value)==false) {?>
        <a href="#menu" data-role="button" data-icon="gear">子供</a>
        <?php }?>
        </div>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>

<!-- 　　　　　　　　　　　新規登録・修正処理　　　　　　　　　　　　 -->
<!-- 自分ぺージ 新規-->
<div data-role="page" id="self_insert">
    <div data-role="header" data-theme="f">
        <h1>自分情報登録</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/selfdatainsert" method="post" data-ajax="false" >
                     <tr>
                        <th>
                             ユーザーID
                         </th>
                        <td>
                          <input type="text" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                     <tr>
                        <th>
                             名前
                         </th>
                        <td>
                          <input type="text" name="self_family_name" value="" size="24">
                      </td>
                    </tr>
                    <tr>
                        <th>
                             誕生日
                         </th>
                        <td>
                          <input type="text" name="birthday" value="" size="24">
                      </td>
                    </tr>
                                   
                     <tr>
                         <td colspan="2">
                             <input type="submit" value="登録">
                         </td>
                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>


<!-- 自分ぺージ 修正-->
<div data-role="page" id="self_change">
    <div data-role="header" data-theme="f">
        <h1>自分情報</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/selfdatachange" method="post" data-ajax="false" >
                     <tr>
                        <th>
                             ユーザーID
                         </th>
                        <td>
                          <input type="text" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                     <tr>
                        <th>
                             名前
                         </th>
                        <td>
                          <input type="text" name="self_family_name" value="<?php echo $_smarty_tpl->tpl_vars['selfFamilyName']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                        <th>
                             誕生日
                         </th>
                        <td>
                          <input type="text" name="birthday" value="<?php echo $_smarty_tpl->tpl_vars['birthday']->value;?>
" size="24">
                      </td>
                    </tr>
                

                   
                     <tr>
                         <td colspan="2">
                             <input type="submit" value="修正">
                         </td>
                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>

<!-- 父親ぺージ 新規-->
<div data-role="page" id="father_insert">
    <div data-role="header" data-theme="f">
        <h1>父親情報登録</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/fatherdatainsert" method="post" data-ajax="false" >
                     <tr>
                        <th>
                             ユーザーID
                         </th>
                        <td>
                          <input type="text" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                     <tr>
                        <th>
                             名前
                         </th>
                        <td>
                          <input type="text" name="father_family_name" value="" size="24">
                      </td>
                    </tr>
                    <tr>
                        <th>
                             誕生日
                         </th>
                        <td>
                          <input type="text" name="father_birthday" value="" size="24">
                      </td>
                    </tr>
                                   
                     <tr>
                         <td colspan="2">
                             <input type="submit" value="登録">
                         </td>
                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>

<!-- 父親ぺージ 修正-->
<div data-role="page" id="father_change">
    <div data-role="header" data-theme="f">
        <h1>父親情報</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/fatherdatachange" method="post" data-ajax="false" >
                     <tr>
                        <th>
                             ユーザーID
                         </th>
                        <td>
                          <input type="text" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                     <tr>
                        <th>
                             名前
                         </th>
                        <td>
                          <input type="text" name="father_family_name" value="<?php echo $_smarty_tpl->tpl_vars['fatherFamilyName']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                        <th>
                             誕生日
                         </th>
                        <td>
                          <input type="text" name="father_birthday" value="<?php echo $_smarty_tpl->tpl_vars['fatherBirthday']->value;?>
" size="24">
                      </td>
                    </tr>
                                   
                     <tr>
                         <td colspan="2">
                             <input type="submit" value="修正">
                         </td>
                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>


<!-- 母親ぺージ 新規-->
<div data-role="page" id="mather_insert">
    <div data-role="header" data-theme="f">
        <h1>母親情報登録</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/matherdatainsert" method="post" data-ajax="false" >
                     <tr>
                        <th>
                             ユーザーID
                         </th>
                        <td>
                          <input type="text" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                     <tr>
                        <th>
                             名前
                         </th>
                        <td>
                          <input type="text" name="mather_family_name" value="" size="24">
                      </td>
                    </tr>
                    <tr>
                        <th>
                             誕生日
                         </th>
                        <td>
                          <input type="text" name="mather_birthday" value="" size="24">
                      </td>
                    </tr>
                                   
                     <tr>
                         <td colspan="2">
                             <input type="submit" value="登録">
                         </td>
                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>

<!-- 母親ぺージ 修正-->
<div data-role="page" id="mather_change">
    <div data-role="header" data-theme="f">
        <h1>母親情報</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/matherdatachange" method="post" data-ajax="false" >
                     <tr>
                        <th>
                             ユーザーID
                         </th>
                        <td>
                          <input type="text" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                     <tr>
                        <th>
                             名前
                         </th>
                        <td>
                          <input type="text" name="mather_family_name" value="<?php echo $_smarty_tpl->tpl_vars['matherFamilyName']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                        <th>
                             誕生日
                         </th>
                        <td>
                          <input type="text" name="mather_birthday" value="<?php echo $_smarty_tpl->tpl_vars['matherBirthday']->value;?>
" size="24">
                      </td>
                    </tr>
                                   
                     <tr>
                         <td colspan="2">
                             <input type="submit" value="修正">
                         </td>
                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>

<!-- 配偶者ぺージ 新規-->
<div data-role="page" id="spouse_insert">
    <div data-role="header" data-theme="f">
        <h1>配偶者情報登録</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/spousedatainsert" method="post" data-ajax="false" >
                     <tr>
                        <th>
                             ユーザーID
                         </th>
                        <td>
                          <input type="text" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                     <tr>
                        <th>
                             名前
                         </th>
                        <td>
                          <input type="text" name="spouse_family_name" value="" size="24">
                      </td>
                    </tr>
                    <tr>
                        <th>
                             誕生日
                         </th>
                        <td>
                          <input type="text" name="spouse_birthday" value="" size="24">
                      </td>
                    </tr>
                                   
                     <tr>
                         <td colspan="2">
                             <input type="submit" value="登録">
                         </td>
                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>

<!-- 配偶者ぺージ 修正-->
<div data-role="page" id="spouse_change">
    <div data-role="header" data-theme="f">
        <h1>配偶者情報</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/spousedatachange" method="post" data-ajax="false" >
                     <tr>
                        <th>
                             ユーザーID
                         </th>
                        <td>
                          <input type="text" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                     <tr>
                        <th>
                             名前
                         </th>
                        <td>
                          <input type="text" name="spouse_family_name" value="<?php echo $_smarty_tpl->tpl_vars['spouseFamilyName']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                        <th>
                             誕生日
                         </th>
                        <td>
                          <input type="text" name="spouse_birthday" value="<?php echo $_smarty_tpl->tpl_vars['spouseBirthday']->value;?>
" size="24">
                      </td>
                    </tr>
                                   
                     <tr>
                         <td colspan="2">
                            <input type="submit" value="修正">
                         </td>
                         <td>
                            <a href="#spouse_delete" data-role="button">削除</a>
                         </td>

                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>

<!-- 兄弟姉妹１ぺージ 新規-->
<div data-role="page" id="brotherone_insert">
    <div data-role="header" data-theme="f">
        <h1>兄弟姉妹情報登録</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/brotheronedatainsert" method="post" data-ajax="false" >
                     <tr>
                        <th>
                             ユーザーID
                         </th>
                        <td>
                          <input type="text" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                     <tr>
                        <th>
                             名前
                         </th>
                        <td>
                          <input type="text" name="brotherone_family_name" value="" size="24">
                      </td>
                    </tr>
                    <tr>
                        <th>
                             誕生日
                         </th>
                        <td>
                          <input type="text" name="brotherone_birthday" value="" size="24">
                      </td>
                    </tr>
                                   
                     <tr>
                         <td colspan="2">
                             <input type="submit" value="登録">
                         </td>
                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>

<!--　兄弟姉妹１ぺージ 修正-->
<div data-role="page" id="brotherone_change">
    <div data-role="header" data-theme="f">
        <h1>兄弟姉妹情報</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/brotheronedatachange" method="post" data-ajax="false" >
                     <tr>
                        <th>
                             ユーザーID
                         </th>
                        <td>
                          <input type="text" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                     <tr>
                        <th>
                             名前
                         </th>
                        <td>
                          <input type="text" name="brotherone_family_name" value="<?php echo $_smarty_tpl->tpl_vars['brotheroneFamilyName']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                        <th>
                             誕生日
                         </th>
                        <td>
                          <input type="text" name="brotherone_birthday" value="<?php echo $_smarty_tpl->tpl_vars['brotheroneBirthday']->value;?>
" size="24">
                      </td>
                    </tr>
                                   
                     <tr>
                         <td colspan="2">
                             <input type="submit" value="修正">
                         </td>
                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>

<!-- 兄弟姉妹２ぺージ 新規-->
<div data-role="page" id="brothertwo_insert">
    <div data-role="header" data-theme="f">
        <h1>兄弟姉妹情報登録</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/brothertwodatainsert" method="post" data-ajax="false" >
                     <tr>
                        <th>
                             ユーザーID
                         </th>
                        <td>
                          <input type="text" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                     <tr>
                        <th>
                             名前
                         </th>
                        <td>
                          <input type="text" name="brothertwo_family_name" value="" size="24">
                      </td>
                    </tr>
                    <tr>
                        <th>
                             誕生日
                         </th>
                        <td>
                          <input type="text" name="brothertwo_birthday" value="" size="24">
                      </td>
                    </tr>
                                   
                     <tr>
                         <td colspan="2">
                             <input type="submit" value="登録">
                         </td>
                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>

<!--　兄弟姉妹２ぺージ 修正-->
<div data-role="page" id="brothertwo_change">
    <div data-role="header" data-theme="f">
        <h1>兄弟姉妹情報</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/brothertwodatachange" method="post" data-ajax="false" >
                     <tr>
                        <th>
                             ユーザーID
                         </th>
                        <td>
                          <input type="text" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                     <tr>
                        <th>
                             名前
                         </th>
                        <td>
                          <input type="text" name="brothertwo_family_name" value="<?php echo $_smarty_tpl->tpl_vars['brothertwoFamilyName']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                        <th>
                             誕生日
                         </th>
                        <td>
                          <input type="text" name="brothertwo_birthday" value="<?php echo $_smarty_tpl->tpl_vars['brothertwoBirthday']->value;?>
" size="24">
                      </td>
                    </tr>
                                   
                     <tr>
                         <td colspan="2">
                            <input type="submit" value="修正">
                         </td>
                         <td>
                            <a href="#brothertwo_delete" data-role="button">削除</a>
                         </td>
                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>

<!-- 兄弟姉妹３ぺージ 新規-->
<div data-role="page" id="brotherthree_insert">
    <div data-role="header" data-theme="f">
        <h1>兄弟姉妹情報登録</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/brotherthreedatainsert" method="post" data-ajax="false" >
                     <tr>
                        <th>
                             ユーザーID
                         </th>
                        <td>
                          <input type="text" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                     <tr>
                        <th>
                             名前
                         </th>
                        <td>
                          <input type="text" name="brotherthree_family_name" value="" size="24">
                      </td>
                    </tr>
                    <tr>
                        <th>
                             誕生日
                         </th>
                        <td>
                          <input type="text" name="brotherthree_birthday" value="" size="24">
                      </td>
                    </tr>
                                   
                     <tr>
                         <td colspan="2">
                             <input type="submit" value="登録">
                         </td>
                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>


<!--　兄弟姉妹３ぺージ 修正-->
<div data-role="page" id="brotherthree_change">
    <div data-role="header" data-theme="f">
        <h1>兄弟姉妹情報</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/brotherthreedatachange" method="post" data-ajax="false" >
                     <tr>
                        <th>
                             ユーザーID
                         </th>
                        <td>
                          <input type="text" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                     <tr>
                        <th>
                             名前
                         </th>
                        <td>
                          <input type="text" name="brotherthree_family_name" value="<?php echo $_smarty_tpl->tpl_vars['brotherthreeFamilyName']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                        <th>
                             誕生日
                         </th>
                        <td>
                          <input type="text" name="brotherthree_birthday" value="<?php echo $_smarty_tpl->tpl_vars['brotherthreeBirthday']->value;?>
" size="24">
                      </td>
                    </tr>
                                   
                     <tr>
                         <td colspan="2">
                             <input type="submit" value="修正">
                         </td>
                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>

<!-- 子供１ぺージ 新規-->
<div data-role="page" id="childone_insert">
    <div data-role="header" data-theme="f">
        <h1>子供情報登録</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/childonedatainsert" method="post" data-ajax="false" >
                     <tr>
                        <th>
                             ユーザーID
                         </th>
                        <td>
                          <input type="text" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                     <tr>
                        <th>
                             名前
                         </th>
                        <td>
                          <input type="text" name="childone_family_name" value="" size="24">
                      </td>
                    </tr>
                    <tr>
                        <th>
                             誕生日
                         </th>
                        <td>
                          <input type="text" name="childone_birthday" value="" size="24">
                      </td>
                    </tr>
                                   
                     <tr>
                         <td colspan="2">
                             <input type="submit" value="登録">
                         </td>
                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>

<!--　子供１ぺージ 修正-->
<div data-role="page" id="childone_change">
    <div data-role="header" data-theme="f">
        <h1>子供情報</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/childonedatachange" method="post" data-ajax="false" >
                     <tr>
                        <th>
                             ユーザーID
                         </th>
                        <td>
                          <input type="text" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                     <tr>
                        <th>
                             名前
                         </th>
                        <td>
                          <input type="text" name="childone_family_name" value="<?php echo $_smarty_tpl->tpl_vars['childoneFamilyName']->value;?>
" size="24">
                      </td>
                    </tr>
                    <tr>
                        <th>
                             誕生日
                         </th>
                        <td>
                          <input type="text" name="childone_birthday" value="<?php echo $_smarty_tpl->tpl_vars['childoneBirthday']->value;?>
" size="24">
                      </td>
                    </tr>
                                   
                     <tr>
                         <td colspan="2">
                             <input type="submit" value="修正">
                         </td>
                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>
 

<!-- 　　　　　　　　　　削　除　処　理　　　　　　　　　　　　　　　　　 -->

<!--　配 偶 者 削 除 -->
<div data-role="page" id="spouse_delete">
    <div data-role="header" data-theme="f">
        <h1>配偶者</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/spousedatadelete" method="post" data-ajax="false" >
                     <tr>
                        <th>     
                        </th>
                        <td>
                          <input type="hidden" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>                                  
                    <tr>
                         <td colspan="2">
                             <input type="submit" value="削除実行">
                         </td>
                        <td colspan="2">
                            <a href="#spouse_change" data-role="button">キャンセル</a>
                         </td>
                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>

</div>


<!--　兄　弟　姉　妹　２　　 削 除 -->
<div data-role="page" id="brothertwo_delete">
    <div data-role="header" data-theme="f">
        <h1>兄弟姉妹</h1>
        <a style= "float:right;" href="#top" data-role="button" data-icon="home">戻る</a>
    </div>
    <div data-role="content">
                <form action="../orderpage/brothertwodatadelete" method="post" data-ajax="false" >
                     <tr>
                        <th>     
                        </th>
                        <td>
                          <input type="hidden" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
" size="24">
                      </td>
                    </tr>                                  
                    <tr>
                         <td colspan="2">
                             <input type="submit" value="削除実行">
                         </td>
                        <td colspan="2">
                            <a href="#brothertwo_change" data-role="button">キャンセル</a>
                         </td>
                     </tr>
                 </form>

    </div>
    <div data-role="footer" data-theme="f">
        <h4></h4>
    </div>
</div>

</div>
</body>
</html><?php }} ?>
