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

        self.htmlCanvas.find('canvas').attr("width",template.width).attr("height",template.height);

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
        if($that.attr("data-category")==undefined)return;
        // if($that.attr("data-category")==undefined || modifier[$that.attr("data-category")]==undefined)return;
        if($that.attr("data-toggle")!=undefined && $that.attr("data-toggle")=="true"){
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
        else if($that.attr("data-action")!=undefined){
            var act = $that.attr("data-action"), val = parseFloat(modifier[$that.attr("data-category")]),step = parseFloat($that.attr("data-step"));
            switch(act){
                case "increase":
                    val+=step;
                    break;
                case "decrease":
                    val-=step;
                    break;
            }

            if(act == "set") {
                modifier.set($that.attr("data-category").toString(),$that.attr("data-value").toString());
                // modifier.set("fill","black");
                console.debug($that.attr("data-category"),$that.attr("data-value"));
            }
            else modifier[$that.attr("data-category")] = val;
        }
        else{
            console.debug(modifier,$that.attr("data-category"),modifier[$that.attr("data-category")],$that.attr("data-value"));
            modifier[$that.attr("data-category")]= ($that.attr("data-value")==undefined)?modifier[$that.attr("data-category")]:$that.attr("data-value");
            $that.parent().find('[data-category='+$that.attr("data-category")+']').removeClass('active');
            $that.addClass('active');
        }
        self.canvas.renderAll();
    },
    settings:function(obj){
        var s = '',that = this,self = window.vsbContructor,
            textBox = function(obj){
                var bg = $('<div class="ui icon basic buttons"></div>').appendTo(self.htmlSetting), modifier = obj;
                $('<button class="ui basic button" data-category="fontWeight" data-toggle="true" data-active="bold" data-passive="normal" data-title="Жирный шрифт"><i class="align bold icon"></i></button>').appendTo(bg).popup();
                $('<button class="ui basic button" data-category="fontStyle" data-toggle="true" data-active="italic" data-passive="normal" data-title="Наклонный шрифт"><i class="align italic icon"></i></button>').appendTo(bg).popup();
                bg = $('<div class="ui icon basic buttons"></div>').appendTo(self.htmlSetting);
                $('<button class="ui basic button" data-title="Уменьшить штрифт" data-category="fontSize" data-action="decrease" data-step="2"><i class="font icon"></i><i class="long arrow down icon"></i></button>').appendTo(bg).popup();
                $('<button class="ui basic button" data-title="Увеличить штрифт" data-category="fontSize" data-action="increase" data-step="2"><i class="font icon"></i><i class="long arrow up icon"></i></button>').appendTo(bg).popup();
                var dd = $('<div class="ui basic button dropdown" data-title="Выбрать штрифт"></div>').appendTo(bg).popup();
                dd.append('<i class="align icon font"></i><span class=" default text">'+modifier.fontFamily+'</span>');
                dd = $('<div class="menu buttons"></div>').appendTo(dd);
                $('<div class="item button" data-category="fontFamily" data-value="Arial"><span class="text" style="font-family:\'Arial\'">Arial</span></div>').appendTo(dd).popup();
                $('<div class="item button" data-category="fontFamily" data-value="Open Sans"><span class="text" style="font-family:\'Open Sans\'">Open Sans</span></div>').appendTo(dd).popup();
                $('<div class="item button" data-category="fontFamily" data-value="Times"><span class="text" style="font-family:\'Times\'">Times</span></div>').appendTo(dd).popup();
                dd = $('<div class="ui basic dropdown button" data-title="Изменить цвет шрифта"></div>').appendTo(bg).popup();
                dd.append('<span class="default text"><i class="vsb-color-box" style="background-color:'+modifier.fill+'"></i></span>');
                dd = $('<div class="menu buttons"></div>').appendTo(dd);
                $('<div class="item button" data-category="fill" data-action="set" data-value="black"><span class="text black"><i class="black vsb-color-box"></i></span></div>').appendTo(dd);
                $('<div class="item button" data-category="fill" data-action="set" data-value="white"><span class="text white"><i class="white vsb-color-box"></i></span></div>').appendTo(dd);
                $('<div class="item button" data-category="fill" data-action="set" data-value="grey"><span class="text"><i class="grey vsb-color-box"></i></span></div>').appendTo(dd);
                $('<div class="item button" data-category="fill" data-action="set" data-value="orange"><span class="text"><i class="orange vsb-color-box"></i></span></div>').appendTo(dd);
                $('<div class="item button" data-category="fill" data-action="set" data-value="red"><span class="text"><i class="red vsb-color-box"></i></span></div>').appendTo(dd);

                bg = $('<div class="ui icon basic buttons"></div>').appendTo(self.htmlSetting);
                $('<button class="ui basic button" data-title="Выровнять по левому краю" data-category="textAlign" data-value="left"><i class="align left icon"></i></button>').appendTo(bg).popup();
                $('<button class="ui basic button" data-title="Выровнять по центру" data-category="textAlign" data-value="center"><i class="align center icon"></i></button>').appendTo(bg).popup();
                $('<button class="ui basic button" data-title="Выровнять по правому краю" data-category="textAlign" data-value="right"><i class="align right icon"></i></button>').appendTo(bg).popup();
                $('<button class="ui basic button" data-title="Выровнять по всей ширине" data-category="textAlign" data-value="justify"><i class="align justify icon"></i></button>').appendTo(bg).popup();

                self.htmlSetting.find(".dropdown").dropdown();
                self.htmlSetting.find(".button").on("click",function(e){self.modificator($(this),modifier)});
            };
        self.htmlSetting.html('');
        switch (obj.get('type')) {
            case 'textbox':
                s = textBox(obj);
                break;
            default:
        }
        $('<button class="ui basic button floated right icon" data-title="Удалить объект"><i class="align trash icon"></i></button>').appendTo(self.htmlSetting).popup().on('click',function(e){
            self.canvas.remove(obj);
        });
        return self;
    },
    panel:function(){
        var self = window.vsbContructor, objs = self.canvas.getObjects();
        self.htmlPanel.find('.vsb-add-text').on('click',function(e){
                console.debug('add textbox');
                var text = new fabric.Textbox('Текст',{
                    width: 100,
                    height: 30,
                    top: 0,
                    left: 0,
                    fill: 'rgba(0,0,0,1)',
                    fontFamily:'Open sans',
                    fontSize:20
                });
                self.canvas.add(text);
            });
        self.htmlPanel.find('.vsb-add-image').on('click',function(e){
                console.debug('add image');
                var text = new fabric.Textbox('изображение',{
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

        $('.colors-picker button').on('click',function(e){
            self.modificator($(this),self.canvas);
        });
        return self;
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
                    "left": 44.87,
                    "top": 44.87,
                    "width": 100,
                    "height": 100,
                    "fill": "rgba(255,0,0,0.5)",
                    "stroke": null,
                    "strokeWidth": 1,
                    "strokeDashArray": null,
                    "strokeLineCap": "butt",
                    "strokeLineJoin": "miter",
                    "strokeMiterLimit": 10,
                    "scaleX": 0.55,
                    "scaleY": 0.55,
                    "angle": 0,
                    "flipX": true,
                    "flipY": true,
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
                    "left": 102,
                    "top": 136,
                    "width": 334.97,
                    "height": 31.64,
                    "fill": "rgba(0,0,0,1)",
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
                    "text": "Текст",
                    "fontSize": 28,
                    "fontWeight": "normal",
                    "fontFamily": "Times",
                    "fontStyle": "",
                    "lineHeight": 1.16,
                    "textDecoration": "",
                    "textAlign": "center",
                    "textBackgroundColor": "",
                    "charSpacing": 0,
                    "minWidth": 20,
                    "styles": {}
                }
            ],
            "background": "#fff"
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
