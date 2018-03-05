var shop=new Vue({
	el:"#shop",
	data:{
		tabs:[
			{'tab_id':1,'tab_name':'Products','isActive':false},
			{'tab_id':2,'tab_name':'Reviews','isActive':false},
			{'tab_id':3,'tab_name':'Location','isActive':false},
			{'tab_id':4,'tab_name':'Photos','isActive':false},
			{'tab_id':5,'tab_name':'Videos','isActive':false},
			{'tab_id':6,'tab_name':'About','isActive':true}
		]
	},
	methods:{
		showHide(x){
			for (var i = this.tabs.length - 1; i >= 0; i--) {
				this.tabs[i].isActive=(this.tabs[i].tab_id==x.id)?true:false;
			}
		}
	}
});