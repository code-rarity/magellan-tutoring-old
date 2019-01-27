/* Source and licensing information for the line(s) below can be found at http://www.magellantutoring.com/core/modules/contextual/js/toolbar/models/StateModel.js. */
(function(t,i){t.contextualToolbar.StateModel=i.Model.extend({defaults:{isViewing:!0,isVisible:!1,contextualCount:0,tabbingContext:null},initialize:function(i,t){this.listenTo(t.contextualCollection,'reset remove add',this.countContextualLinks);this.listenTo(t.contextualCollection,'add',this.lockNewContextualLinks);this.listenTo(this,'change:contextualCount',this.updateVisibility);this.listenTo(this,'change:isViewing',function(i,n){t.contextualCollection.each(function(t){t.set('isLocked',!n)})})},countContextualLinks:function(t,i){this.set('contextualCount',i.length)},lockNewContextualLinks:function(t,i){if(!this.get('isViewing')){t.set('isLocked',!0)}},updateVisibility:function(){this.set('isVisible',this.get('contextualCount')>0)}})})(Drupal,Backbone);
/* Source and licensing information for the above line(s) can be found at http://www.magellantutoring.com/core/modules/contextual/js/toolbar/models/StateModel.js. */