/* Source and licensing information for the line(s) below can be found at http://www.magellantutoring.com/core/modules/quickedit/js/views/EntityDecorationView.js. */
(function(e,i,t){e.quickedit.EntityDecorationView=t.View.extend({initialize:function(){this.listenTo(this.model,'change',this.render)},render:function(){this.$el.toggleClass('quickedit-entity-active',this.model.get('isActive'))},remove:function(){this.setElement(null);t.View.prototype.remove.call(this)}})})(Drupal,jQuery,Backbone);
/* Source and licensing information for the above line(s) can be found at http://www.magellantutoring.com/core/modules/quickedit/js/views/EntityDecorationView.js. */