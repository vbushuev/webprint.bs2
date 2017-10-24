window.vsbContructor={
    canvas:null,
    htmlSetting:null,
    create:function(element,opts){
        var that = this,self = window.vsbContructor,container = $('#'+element),
            canvas_id = 'canvas',
            template = opts.template;

        self.htmlCanvas     = $('#canvas_container');//$('<canvas id="'+canvas_id+'" class="canvas"></canvas>').appendTo($('<div id="container_'+canvas_id+'" class="canvas-box"></div>').appendTo(container));
        self.htmlSetting    = $('#settings_container');//$('<div id="setting_'+canvas_id+'" class="canvas-setting"></div>').appendTo(container);
        self.htmlPanel      = $('#panel_container');//$('<div id="panel_'+canvas_id+'" class="canvas-panel"></div>').appendTo(container);
        self.htmlCanvas.attr("width",template.width).attr("height",template.height);

        self.canvas = this.__canvas = new fabric.Canvas(canvas_id);
        self.canvas.loadFromJSON(template);
        self.panel();
        self.canvas.
            on('object:selected', function( e ){
                var obj = e.target;//vsbContructor.canvas.getActiveObject();
                console.debug(obj.get('type'));
                self.settings(obj);
            })
            .on('object:moving', function (e) {
                var obj = e.target;
                // if object is too big ignore
                if(obj.currentHeight > obj.canvas.height || obj.currentWidth > obj.canvas.width) return;
                obj.setCoords();
                // top-left corner
                if(obj.getBoundingRect().top < 0 || obj.getBoundingRect().left < 0){
                    obj.top = Math.max(obj.top, obj.top-obj.getBoundingRect().top);
                    obj.left = Math.max(obj.left, obj.left-obj.getBoundingRect().left);
                }
                // bot-right corner
                if(obj.getBoundingRect().top+obj.getBoundingRect().height > obj.canvas.height || obj.getBoundingRect().left+obj.getBoundingRect().width > obj.canvas.width){
                    obj.top = Math.min(obj.top, obj.canvas.height-obj.getBoundingRect().height+obj.top-obj.getBoundingRect().top);
                    obj.left = Math.min(obj.left, obj.canvas.width-obj.getBoundingRect().width+obj.left-obj.getBoundingRect().left);
                }
            })
            .on('after:render',function(e){

            });
        self.canvas.backgroundColor='#fff';
        self.canvas.renderAll();
        $('#checkout').on('click',function(){
            console.debug(JSON.stringify(self.canvas));
        });
        return that;
    },
    modificator: function($that,modifier){
        var self = window.vsbContructor;
        if($that.attr("data-category")==undefined || modifier[$that.attr("data-category")]==undefined)return;
        if($that.attr("data-toggle")!="undefined" && $that.attr("data-toggle")=="true"){
            if($that.hasClass('active')){
                modifier[$that.attr("data-category")] = ($that.attr("data-passive").match(/^\{.+\}$/))
                    ?JSON.parse($that.attr("data-passive"))
                    :$that.attr("data-passive");
                $that.removeClass('active');
            }else{
                modifier[$that.attr("data-category")] = ($that.attr("data-active").match(/^\{.+\}$/))
                    ?JSON.parse($that.attr("data-active"))
                    :$that.attr("data-active");
                $that.addClass('active');
            }
        }
        else{
            modifier[$that.attr("data-category")]= ($that.attr("data-value")==undefined)?modifier[$that.attr("data-category")]:$that.attr("data-value");
            $that.parent().find('[data-category='+$that.attr("data-category")+']').removeClass('active');
            $that.addClass('active');
        }
        self.canvas.renderAll();
    },
    settings:function(obj){
        var s = '',that = this,self = window.vsbContructor,
            textBox = function(obj){
                var bg = $('<div class="ui icon buttons"></div>').appendTo(self.htmlSetting), modifier = obj;
                $('<button class="ui button" data-category="textAlign" data-value="left"><i class="align left icon"></i></button>').appendTo(bg);
                $('<button class="ui button" data-category="textAlign" data-value="center"><i class="align center icon"></i></button>').appendTo(bg);
                $('<button class="ui button" data-category="textAlign" data-value="right"><i class="align right icon"></i></button>').appendTo(bg);
                $('<button class="ui button" data-category="textAlign" data-value="justify"><i class="align justify icon"></i></button>').appendTo(bg);

                self.htmlSetting.append('&nbsp;&nbsp;&nbsp;&nbsp;');

                bg = $('<div class="ui icon buttons"></div>').appendTo(self.htmlSetting);
                $('<button class="ui button" data-category="fontWeight" data-toggle="true" data-active="bold" data-passive="normal"><i class="align bold icon"></i></button>').appendTo(bg);
                $('<button class="ui button" data-category="textDecoration" data-toggle="true" data-active="{\"underline\":true}" data-passive="{\"underline\":false}"><i class="align underline icon"></i></button>').appendTo(bg);

                self.htmlSetting.append('&nbsp;&nbsp;&nbsp;&nbsp;');


                self.htmlSetting.find("button").on("click",function(e){self.modificator($(this),modifier)});
                $('<button class="ui button icon"><i class="align trash icon"></i></button>').appendTo(self.htmlSetting).on('click',function(e){
                    self.canvas.remove(modifier);
                });
            };
        self.htmlSetting.html('');
        switch (obj.get('type')) {
            case 'textbox':
                s = textBox(obj);
                break;
            default:
        }
        return self;
    },
    panel:function(){
        var s = '',self = window.vsbContructor, objs = self.canvas.getObjects();
        s+= '<div class="ui tabular menu attached">';
        // s+= '<a class="item active" data-tab="tab\-objects">Объекты</a>';
        s+= '<a class="item active" data-tab="tab\-add">Добавить</a>';
        s+= '<a class="item" data-tab="tab\-background">Фон</a>';
        s+= '<a class="item" data-tab="tab\-templates">Шаблоны</a>';
        s+= '</div>';
        self.htmlPanel.append(s);
        // var htmlObjects = $('<div class="ui tab attached segment active" data-tab="tab\-objects"></div>').appendTo(self.htmlPanel);
        // htmlObjects = $('<div class="ui relaxed divided list"></div>').appendTo(htmlObjects);
        // for(var i in objs){
        //     var obj = objs[i],strObject = '',icon='sticky note outline';
        //     switch (obj.get('type')) {
        //         case 'textbox':
        //                 icon = 'paragraph';
        //             break;
        //         default:
        //     }
        //     strObject+= '<div class="item">';
        //     strObject+= '<i class="large '+icon+' middle aligned icon"></i>';
        //     strObject+= '<div class="content">';
        //     strObject+= '<a class="header">Semantic-Org/Semantic-UI</a>';
        //     strObject+= '<div class="description">Updated 10 mins ago</div>';
        //     strObject+= '</div>';
        //     strObject+= '</div>';
        // }
        var htmlAdd = $('<div class="ui tab attached segment" data-tab="tab\-add"></div>').appendTo(self.htmlPanel);
        htmlAdd = $('<div class="ui relaxed divided list"></div>').appendTo(htmlAdd);
        $('<div class="item"></div>').appendTo(htmlAdd)
            // .append('<i class="large icons middle aligned"><i class="paragraph icon"></i><i class="corner add icon"></i></i>')
            .append('<i class="large aligned middle paragraph icon"></i>')
            .append('<div class="content"><a class="header">Текст</a><div class="description">Можно добавить любой текст</div></div>')
            .on('click',function(e){
                console.debug('add textbox');
                var text = new fabric.Textbox('Текст',{
                    width: 100,
                    height: 30,
                    top: 200,
                    left: 100,
                    fill: 'rgba(0,0,0,1)',
                    fontFamily:'Open sans',
                    fontSize:20
                });
                self.canvas.add(text);
            });

        $('<div class="item"></div>').appendTo(htmlAdd)
            // .append('<i class="large icons middle aligned"><i class="paragraph icon"></i><i class="corner add icon"></i></i>')
            .append('<i class="large aligned middle image icon"></i>')
            .append('<div class="content"><a class="header">Изображение</a><div class="description">Загрузите любое Ваше изображение</div></div>');

        var htmlBackground = $('<div class="ui tab attached segment colors-picker scrolled" data-tab="tab\-background"></div>').appendTo(self.htmlPanel);
        // htmlBackground = $('<div class="ui equal width grid"></div>').appendTo(htmlBackground);
        $('<button type="button" class="ui massive none icon button" data-category="backgroundColor" data-value="none"></button>').appendTo(htmlBackground).on('click',function(e){});
        $('<button type="button" class="ui massive red icon button" data-category="backgroundColor" data-value="red"></button>').appendTo(htmlBackground).on('click',function(e){});
        $('<button type="button" class="ui massive orange icon button" data-category="backgroundColor" data-value="orange"></button>').appendTo(htmlBackground).on('click',function(e){});
        $('<button type="button" class="ui massive yellow icon button" data-category="backgroundColor" data-value="yellow"></button>').appendTo(htmlBackground).on('click',function(e){});
        $('<button type="button" class="ui massive olive icon button" data-category="backgroundColor" data-value="olive"></button>').appendTo(htmlBackground).on('click',function(e){});
        $('<button type="button" class="ui massive green icon button" data-category="backgroundColor" data-value="green"></button>').appendTo(htmlBackground).on('click',function(e){});
        $('<button type="button" class="ui massive teal icon button" data-category="backgroundColor" data-value="teal"></button>').appendTo(htmlBackground).on('click',function(e){});
        $('<button type="button" class="ui massive blue icon button" data-category="backgroundColor" data-value="blue"></button>').appendTo(htmlBackground).on('click',function(e){});
        $('<button type="button" class="ui massive violet icon button" data-category="backgroundColor" data-value="violet"></button>').appendTo(htmlBackground).on('click',function(e){});
        $('<button type="button" class="ui massive purple icon button" data-category="backgroundColor" data-value="purple"></button>').appendTo(htmlBackground).on('click',function(e){});
        $('<button type="button" class="ui massive purple icon button" data-category="backgroundColor" data-value="purple"></button>').appendTo(htmlBackground).on('click',function(e){});
        $('<button type="button" class="ui massive pink icon button" data-category="backgroundColor" data-value="pink"></button>').appendTo(htmlBackground).on('click',function(e){});
        $('<button type="button" class="ui massive brown icon button" data-category="backgroundColor" data-value="brown"></button>').appendTo(htmlBackground).on('click',function(e){});
        $('<button type="button" class="ui massive grey icon button" data-category="backgroundColor" data-value="grey"></button>').appendTo(htmlBackground).on('click',function(e){});
        $('<button type="button" class="ui massive black icon button" data-category="backgroundColor" data-value="black"></button>').appendTo(htmlBackground).on('click',function(e){});
        $('<button type="button" class="ui massive white icon button" data-category="backgroundColor" data-value="white"></button>').appendTo(htmlBackground).on('click',function(e){});
        $('.colors-picker button').on('click',function(e){
            self.modificator($(this),self.canvas);
        });

        // $('<div class="column"><div class="ui yellow empty circular label"></div></div>').appendTo(htmlBackground).on('click',function(e){});
        // $('<div class="column"><div class="ui blue empty circular label"></div></div>').appendTo(htmlBackground).on('click',function(e){});
        // $('<div class="column"><div class="ui green empty circular label"></div></div>').appendTo(htmlBackground).on('click',function(e){});
        // $('<div class="column"><div class="ui black empty circular label"></div></div>').appendTo(htmlBackground).on('click',function(e){});
        // $('<div class="column"><div class="ui white empty circular label"></div></div>').appendTo(htmlBackground).on('click',function(e){});

        $('<div class="ui tab attached segment" data-tab="tab\-templates"></div>').appendTo(self.htmlPanel);
        return s;
    }
};
(function(){

    new vsbContructor.create('constructor',{
        template:{
            "width":580,
            "height":330,
            "objects": [
                {
                    "type": "rect",
                    "originX": "left",
                    "originY": "top",
                    "left": 100,
                    "top": 100,
                    "width": 100,
                    "height": 100,
                    "fill": "rgba(255,0,0,0.5)",
                    "stroke": null,
                    "strokeWidth": 1,
                    "strokeDashArray": null,
                    "strokeLineCap": "butt",
                    "strokeLineJoin": "miter",
                    "strokeMiterLimit": 10,
                    "scaleX": 1,
                    "scaleY": 1,
                    "angle": 0,
                    "flipX": false,
                    "flipY": false,
                    "opacity": 1,
                    "shadow": null,
                    "visible": true,
                    "clipTo": null,
                    "backgroundColor": "",
                    "fillRule": "nonzero",
                    "globalCompositeOperation": "source-over",
                    "transformMatrix": null,
                    "skewX": 0,
                    "skewY": 0,
                    "rx": 0,
                    "ry": 0
                },
                {
                    "type": "textbox",
                    "originX": "left",
                    "originY": "top",
                    "left": 100,
                    "top": 220,
                    "width": 100,
                    "height": 22.6,
                    "fill": "rgba(255,0,0,0.5)",
                    "stroke": null,
                    "strokeWidth": 1,
                    "strokeDashArray": null,
                    "strokeLineCap": "butt",
                    "strokeLineJoin": "miter",
                    "strokeMiterLimit": 10,
                    "scaleX": 1,
                    "scaleY": 1,
                    "angle": 0,
                    "flipX": false,
                    "flipY": false,
                    "opacity": 1,
                    "shadow": null,
                    "visible": true,
                    "clipTo": null,
                    "backgroundColor": "",
                    "fillRule": "nonzero",
                    "globalCompositeOperation": "source-over",
                    "transformMatrix": null,
                    "skewX": 0,
                    "skewY": 0,
                    "text": "Textbox",
                    "fontSize": 20,
                    "fontWeight": "normal",
                    "fontFamily": "Open sans",
                    "fontStyle": "",
                    "lineHeight": 1.16,
                    "textDecoration": "",
                    "textAlign": "left",
                    "textBackgroundColor": "",
                    "charSpacing": 0,
                    "minWidth": 20,
                    "styles": {}
                }
            ]
        }
    });
    // var rect = new fabric.Rect({
    //     width: 100,
    //     height: 100,
    //     top: 100,
    //     left: 100,
    //     fill: 'rgba(255,0,0,0.5)'
    // });
    // rect["vsb"]={
    //     author:'vsb',
    //     type:'rect'
    // };
    // canvas.add(rect);
    // var text = new fabric.Textbox('Textbox',{
    //     width: 100,
    //     height: 30,
    //     top: 220,
    //     left: 100,
    //     fill: 'rgba(255,0,0,0.5)',
    //     fontFamily:'Open sans',
    //     fontSize:20
    // });
    // canvas.add(text);


    // console.debug(JSON.stringify(canvas));
})();
