<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>系烤資訊</title>
</head>
<body>
  <h1><center>系烤活動</center></h1>
    <P>又到了一年一度的系烤時間啦~🍖🍖 
        這是資管系每年都會舉辦的活動之一 
        目的是為了藉由烤肉來增進感情🥵🥵 <br>
        時間：3/22 17:00 <br>
        地點：高雄大學露營烤肉區(操場旁邊)  
    </P>
    <div>
    <img class="img-fluid" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/澎湃海陸燒烤宴-大海陸-精選九品人氣食材-適合5-7人分享-原價-3-605-中秋限時特惠只要-2-880-圖-佐佐鮮提供-1629792573.jpg?crop=1xw:1xh;center,top&resize=980:*">
  <table border= 1 width= 200px cellpadding= 5 cellspacing= 10>
    <caption>繳費金額對照</caption>
    <tr>
      <th></th>
      <th>有</th>
      <th>沒有</th>
    <tr>
    <tr>
      <td>一年級</td>
      <td>150</td>
      <td>100</td>
    <tr>
    <tr>
      <td>二年級</td>
      <td>150</td>
      <td>100</td>
    <tr>
    <tr>
      <td>三年級</td>
      <td>150</td>
      <td>100</td>
    <tr>
    <tr>
      <td>四年級</td>
      <td>150</td>
      <td>100</td>
    <tr>
    </div>
  </table>

  <form action="form_result2.php" method="post">
     <p>Name:</p>
     <p><input type="text" name="stdName" placeholder="請輸入名字"></p>
  
      <p>學號</p>
      <p><input type="text" name="stdid" placeholder="請輸入學號" ></p>
  
      <p>有什麼想說的話嗎？ </p>
      <p><textarea name="comments" rows="5" cols="20" placeholder ="您的意見"></textarea></p>
  
      <p>請問你有沒有想吃的肉: </p>
      <p><input type="radio" name="interest" value="beef"> 牛 </p>
      <p><input type="radio" name="interest" value="pork"> 豬 </p>
      <p><input type="radio" name="interest" value="chicken"> 雞 </p>
      
      <!-- 想要吃哪個國家的肉？
      <select name="country[]" mulitiple>
      <option value="Australia">澳洲
      <option value="USA">美國
      <option value="Canada">加拿大
      <option value="Spain">西班牙
      <option value="Japan">日本
      </select> -->
      <p><input type="submit" value="送出資料"><input type="reset" value="重設"></p>
      
      

  
  </form> 
  
</body>
</html>