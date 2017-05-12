  <div class="footer">
    <p>&copy; McConfigs | <a href="https://minecraft.net">Minecraft</a> is a copyright of <a href="https://mojang.com">Mojang</a> and is not affiliated with this site.</p>
  </div>
<script type="text/javascript">
$('#essentials-locale').click(function () {$.bootstrapGrowl('English: "en"<br/>British English: "en_GB"<br/>American English: "en_US"<br/>Czech: "cs"<br/>Danish: "da"<br/>German: "de"<br/>Spanish: "es"<br/>Finnish: "fi"<br/>French: "fr"<br/>Italian: "it"<br/>Dutch: "nl"<br/>Polish: "pl"<br/>Portugese: "pt"<br/>Romanian: "ro"<br/>Swedish; "sv"<br/>Chinese: "zh"<br/>Hong Kong Chinese: "zh_HK"<br/>Traditional Chinese: "zh_TW"', {
  ele: 'body',
  delay: 10000, // Optional, 0 = forever
  type: 'info', // Optional
  width: 'auto',
  align: 'right',
  offset: {from: 'top', amount: 20}
})});
 $(document).ready(function () {
     $('#btnAdd').click(function () {
         var count = 3,
             first_row = $('#Row2');
         while (count-- > 0) first_row.clone().appendTo('#kits-table');
     });


     var table = $('#kits-table'),
         iter = 1;
     var table1 = $('#list-table'),
         iter1 = 1;
     $('#btnAddCol').click(function () {
         table.find('tr').each(function(){
           var trow = $(this);
                 trow.append('<td><label>Kit Item #'+iter+'</label><input type="text" class="form-control" name="kits-items['+iter+'][]"  size="15"></td>');

         });
         iter += 1;
     });
     $('#btnAddColList').click(function () {
         table1.find('tr').each(function(){
           var trow = $(this);
                 trow.append('<td><label>Group #'+iter1+'</label><input type="text" class="form-control" name="list-groups['+iter1+'][]"  size="15"></td>');

         });
         iter1 += 1;
     });
 });
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

   ga('create', 'UA-52657458-5', 'auto');
   ga('send', 'pageview');

 </script>
