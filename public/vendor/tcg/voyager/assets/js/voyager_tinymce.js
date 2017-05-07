function setImageValue(url){
  $('.mce-btn.mce-open').parent().find('.mce-textbox').val(url);
}

$(document).ready(function(){

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

  var fontSize = '';
  var fontsizeFormats = '宋体=宋体;微软雅黑=微软雅黑;新宋体=新宋体;Courier New=courier new,courier,monospace;AkrutiKndPadmini=Akpdmi-n';
  for(var i=12;i<38; i++){
      var item = i+'px ';
      fontSize += item;
  }

  var templateDis = '<div class="cell-sm-10 cell-md-4 offset-top-30 offset-md-top-0"><a class="box-icon-link"> <span class="reveal-block offset-top-20"> <span class="reveal-block font-accent text-uppercase text-bold text-spacing-50 text-primary">我是标题 </span> </span> <span class="reveal-block offset-top-15 offset-md-top-30 text-extra-small"> <span class="p text-silver-chalice text-extra-small"> 我是内容</span></span><span class="box-icon-dots reveal-block offset-top-10"><span class="h5 text-spacing-20 text-silver-chalice">...</span></span></a></div>';

  tinymce.init({
    menubar: false,
    selector:'textarea.richTextBox',
    skin: 'voyager',
    min_height: 600,
    resize: 'vertical',
      fontsize_formats: fontSize,
      font_formats: fontsizeFormats,
    plugins: 'link, image, code, youtube, giphy, table, textcolor, template',
    extended_valid_elements : 'input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
    file_browser_callback: function(field_name, url, type, win) {
            if(type =='image'){
              $('#upload_file').trigger('click');
            }
        },
    toolbar1: 'styleselect bold italic underline template  | forecolor backcolor fontsizeselect fontselect | alignleft aligncenter alignright | bullist numlist outdent indent | link image table youtube giphy | code',
    convert_urls: false,
    image_caption: true,
    image_title: true,
      templates: [
          { title: '全球联盟小模块', content: templateDis }
      ],
      language:'zh_CN'
  });

});
