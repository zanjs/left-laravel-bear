@extends('voyager::master')

@section('css')
    <style>
        .panel-actions .voyager-trash {
            cursor: pointer;
        }
        .panel-actions .voyager-trash:hover {
            color: #e94542;
        }
        .panel hr {
            margin-bottom: 10px;
        }
        .panel {
            padding-bottom: 15px;
        }
        .sort-icons {
            font-size: 21px;
            color: #ccc;
            position: relative;
            cursor: pointer;
        }
        .sort-icons:hover {
            color: #37474F;
        }
        .voyager-sort-desc {
            margin-right: 10px;
        }
        .voyager-sort-asc {
            top: 10px;
        }
        .page-title {
            margin-bottom: 0;
        }
        .panel-title code {
            border-radius: 30px;
            padding: 5px 10px;
            font-size: 11px;
            border: 0;
            position: relative;
            top: -2px;
        }
        .new-block {
            text-align: center;
            width: 100%;
            margin-top: 20px;
        }
        .new-block .panel-title {
            margin: 0 auto;
            display: inline-block;
            color: #999fac;
            font-weight: lighter;
            font-size: 13px;
            background: #fff;
            width: auto;
            height: auto;
            position: relative;
            padding-right: 15px;
        }

        .new-block hr {
            margin-bottom: 0;
            position: absolute;
            top: 7px;
            width: 96%;
            margin-left: 2%;
        }

        .new-block .panel-title i {
            position: relative;
            top: 2px;
        }

        .new-blocks-options {
            display: none;
            padding-bottom: 10px;
        }

        .new-blocks-options label {
            margin-top: 13px;
        }

        .new-blocks-options .alert {
            margin-bottom: 0;
        }

        #toggle_options {
            clear: both;
            float: right;
            font-size: 12px;
            position: relative;
            margin-top: 15px;
            margin-right: 5px;
            margin-bottom: 10px;
            cursor: pointer;
            z-index: 9;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .new-block-btn {
            margin-right: 15px;
            position: relative;
            margin-bottom: 0;
            top: 5px;
        }

        .new-block-btn i {
            position: relative;
            top: 2px;
        }

        .img_blocks_container {
            width: 200px;
            height: auto;
            position: relative;
        }

        .img_blocks_container > a {
            position: absolute;
            right: -10px;
            top: -10px;
            display: block;
            padding: 5px;
            background: #F94F3B;
            color: #fff;
            border-radius: 13px;
            width: 25px;
            height: 25px;
            font-size: 15px;
            line-height: 19px;
        }

        .img_blocks_container > a:hover, .img_blocks_container > a:focus, .img_blocks_container > a:active {
            text-decoration: none;
        }

        textarea {
            min-height: 120px;
        }
        textarea.hidden{
            display:none;
        }
    </style>
@stop

@section('head')
    <script type="text/javascript" src="{{ voyager_asset('lib/js/jsonarea/jsonarea.min.js') }}"></script>
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-pizza"></i> Blocks 模块内容
    </h1>
@stop

@section('content')

    <div class="container-fluid">
        @include('voyager::alerts')
        @if(config('voyager.show_dev_tips'))
        
        @endif
    </div>

    <div class="page-content container-fluid">
        <form action="{{ route('voyager.blocks.update') }}" method="POST" enctype="multipart/form-data">
            {{ method_field("PUT") }}
            {{ csrf_field() }}
            <div class="panel">
                @foreach($blocks as $block)
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            {{ $block->display_name }}<code>Voyager::block('{{ $block->key }}')</code>
                        </h3>
                        <div class="panel-actions">
                            <a href="{{ route('voyager.blocks.move_up', $block->id) }}">
                                <i class="sort-icons voyager-sort-asc"></i>
                            </a>
                            <a href="{{ route('voyager.blocks.move_down', $block->id) }}">
                                <i class="sort-icons voyager-sort-desc"></i>
                            </a>
                            <i class="voyager-trash"
                               data-id="{{ $block->id }}"
                               data-display-key="{{ $block->key }}"
                               data-display-name="{{ $block->display_name }}"></i>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if ($block->type == "text")
                            <input type="text" class="form-control" name="{{ $block->key }}" value="{{ $block->value }}">
                        @elseif($block->type == "text_area")
                            <textarea class="form-control" name="{{ $block->key }}">@if(isset($block->value)){{ $block->value }}@endif</textarea>
                        @elseif($block->type == "rich_text_box")
                            <textarea class="form-control richTextBox" name="{{ $block->key }}">@if(isset($block->value)){{ $block->value }}@endif</textarea>
                        @elseif($block->type == "code_editor")
                            <?php $options = json_decode($block->details); ?>
                            <div id="{{ $block->key }}" data-theme="{{ @$options->theme }}" data-language="{{ @$options->language }}" class="ace_editor min_height_400" name="{{ $block->key }}">@if(isset($block->value)){{ $block->value }}@endif</div>
                            <textarea name="{{ $block->key }}" id="{{ $block->key }}_textarea" class="hidden">@if(isset($block->value)){{ $block->value }}@endif</textarea>
                        @elseif($block->type == "image" || $block->type == "file")
                            @if(isset( $block->value ) && !empty( $block->value ) && Storage::disk(config('voyager.storage.disk'))->exists($block->value))
                                <div class="img_blocks_container">
                                    <a href="{{ route('voyager.blocks.delete_value', $block->id) }}" class="voyager-x"></a>
                                    <img src="{{ Storage::disk(config('voyager.storage.disk'))->url($block->value) }}" style="width:200px; height:auto; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                </div>
                            @elseif($block->type == "file" && isset( $block->value ))
                                <div class="fileType">{{ $block->value }}</div>
                            @endif
                            <input type="file" name="{{ $block->key }}">
                        @elseif($block->type == "select_dropdown")
                            <?php $options = json_decode($block->details); ?>
                            <?php $selected_value = (isset($block->value) && !empty($block->value)) ? $block->value : NULL; ?>
                            <select class="form-control" name="{{ $block->key }}">
                                <?php $default = (isset($options->default)) ? $options->default : NULL; ?>
                                @if(isset($options->options))
                                    @foreach($options->options as $index => $option)
                                        <option value="{{ $index }}" @if($default == $index && $selected_value === NULL){{ 'selected="selected"' }}@endif @if($selected_value == $index){{ 'selected="selected"' }}@endif>{{ $option }}</option>
                                    @endforeach
                                @endif
                            </select>

                        @elseif($block->type == "radio_btn")
                            <?php $options = json_decode($block->details); ?>
                            <?php $selected_value = (isset($block->value) && !empty($block->value)) ? $block->value : NULL; ?>
                            <?php $default = (isset($options->default)) ? $options->default : NULL; ?>
                            <ul class="radio">
                                @if(isset($options->options))
                                    @foreach($options->options as $index => $option)
                                        <li>
                                            <input type="radio" id="option-{{ $index }}" name="{{ $block->key }}"
                                                   value="{{ $index }}" @if($default == $index && $selected_value === NULL){{ 'checked' }}@endif @if($selected_value == $index){{ 'checked' }}@endif>
                                            <label for="option-{{ $index }}">{{ $option }}</label>
                                            <div class="check"></div>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        @elseif($block->type == "checkbox")
                            <?php $options = json_decode($block->details); ?>
                            <?php $checked = (isset($block->value) && $block->value == 1) ? true : false; ?>
                            @if (isset($options->on) && isset($options->off))
                                <input type="checkbox" name="{{ $block->key }}" class="toggleswitch" @if($checked) checked @endif data-on="{{ $options->on }}" data-off="{{ $options->off }}">
                            @else
                                <input type="checkbox" name="{{ $block->key }}" @if($checked) checked @endif class="toggleswitch">
                            @endif
                        @endif

                    </div>
                    @if(!$loop->last)
                        <hr>
                    @endif
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary pull-right">保存</button>
        </form>

        <div style="clear:both"></div>

        <div class="panel" style="margin-top:10px;">
            <div class="panel-heading new-block">
                <hr>
                <h3 class="panel-title"><i class="voyager-plus"></i> New Block</h3>
            </div>
            <div class="panel-body">
                <form action="{{ route('voyager.blocks.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="col-md-4">
                        <label for="display_name">Name</label>
                        <input type="text" class="form-control" name="display_name"
                               placeholder="Blocks name ex: Blocks Title" required="required">
                    </div>
                    <div class="col-md-4">
                        <label for="key">Key</label>
                        <input type="text" class="form-control" name="key" placeholder="Blocks key ex: blocks_title" required="required">
                    </div>
                    <div class="col-md-4">
                        <label for="asdf">Type</label>
                        <select name="type" class="form-control" required="required">
                            <option value="">Choose type</option>
                            <option value="text">Text Box</option>
                            <option value="text_area">Text Area</option>
                            <option value="rich_text_box">Rich Textbox</option>
                            <option value="code_editor">Code Editor</option>
                            <option value="checkbox">Check Box</option>
                            <option value="radio_btn">Radio Button</option>
                            <option value="select_dropdown">Select Dropdown</option>
                            <option value="file">File</option>
                            <option value="image">Image</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <a id="toggle_options"><i class="voyager-double-down"></i> OPTIONS</a>
                        <div class="new-blocks-options">
                            <label for="options">Options
                                <small>
                                    (optional, only applies to certain types like dropdown box or radio button)
                                </small>
                            </label>
                            <div id="options_editor" class="form-control min_height_200" data-language="json"></div>
                            <textarea id="options_textarea" name="details" class="hidden"></textarea>
                            <div id="valid_options" class="alert-success alert" style="display:none">Valid Json</div>
                            <div id="invalid_options" class="alert-danger alert" style="display:none">Invalid Json</div>
                        </div>
                    </div>
                    <script>
                        $('document').ready(function () {
                            $('#toggle_options').click(function () {
                                $('.new-blocks-options').toggle();
                                if ($('#toggle_options .voyager-double-down').length) {
                                    $('#toggle_options .voyager-double-down').removeClass('voyager-double-down').addClass('voyager-double-up');
                                } else {
                                    $('#toggle_options .voyager-double-up').removeClass('voyager-double-up').addClass('voyager-double-down');
                                }
                            });
                        });
                    </script>
                    <div style="clear:both"></div>
                    <button type="submit" class="btn btn-primary pull-right new-block-btn">
                        <i class="voyager-plus"></i> Add New Block
                    </button>
                    <div style="clear:both"></div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">
                        <i class="voyager-trash"></i> Are you sure you want to delete the <span id="delete_block_title"></span> Block?
                    </h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('voyager.blocks.delete', ['id' => '__id']) }}" id="delete_form" method="POST">
                        {{ method_field("DELETE") }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm" value="Yes, Delete This Block">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('document').ready(function () {
            $('.voyager-trash').click(function () {
                var display = $(this).data('display-name') + '/' + $(this).data('display-key');

                $('#delete_block_title').text(display);
                $('#delete_form')[0].action = $('#delete_form')[0].action.replace('__id', $(this).data('id'));
                $('#delete_modal').modal('show');
            });

            $('.toggleswitch').bootstrapToggle();
        });
    </script>
@stop

@section('javascript')
    <iframe id="form_target" name="form_target" style="display:none"></iframe>
    <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="POST" enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
        {{ csrf_field() }}
        <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
        <input type="hidden" name="type_slug" id="type_slug" value="blocks">
    </form>

    <script src="{{ voyager_asset('lib/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ voyager_asset('js/voyager_tinymce.js') }}"></script>
    <script src="{{ voyager_asset('lib/js/ace/ace.js') }}"></script>
    <script src="{{ voyager_asset('js/voyager_ace_editor.js') }}"></script>
    <script>
        var options_editor = ace.edit('options_editor');
        options_editor.getSession().setMode("ace/mode/json");

        var options_textarea = document.getElementById('options_textarea');
        options_editor.getSession().on('change', function() {
            console.log(options_editor.getValue());
            options_textarea.value = options_editor.getValue();
        });
    </script>
@stop
