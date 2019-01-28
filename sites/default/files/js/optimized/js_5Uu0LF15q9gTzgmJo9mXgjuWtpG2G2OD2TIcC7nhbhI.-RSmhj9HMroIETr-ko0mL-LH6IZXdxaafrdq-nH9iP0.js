/* Source and licensing information for the line(s) below can be found at http://www.magellantutoring.com/core/misc/tableselect.js. */
(function(e,t){t.behaviors.tableSelect={attach:function(c,l){e(c).find('th.select-all').closest('table').once('table-select').each(t.tableSelect)}};t.tableSelect=function(){if(e(this).find('td input[type="checkbox"]').length===0){return};var r=this,c=void 0,l=void 0,n=e(r),a={selectAll:t.t('Select all rows in this table'),selectNone:t.t('Deselect all rows in this table')};var i=function(t){n.prev('table.sticky-header').addBack().find('th.select-all input[type="checkbox"]').each(function(){var c=e(this),l=c.prop('checked')!==t;c.attr('title',t?a.selectNone:a.selectAll);if(l){c.prop('checked',t).trigger('change')}})};n.find('th.select-all').prepend(e('<input type="checkbox" class="form-checkbox" />').attr('title',a.selectAll)).on('click',function(t){if(e(t.target).is('input[type="checkbox"]')){c.each(function(){var c=e(this),l=c.prop('checked')!==t.target.checked;if(l){c.prop('checked',t.target.checked).trigger('change')};c.closest('tr').toggleClass('selected',this.checked)});i(t.target.checked)}});c=n.find('td input[type="checkbox"]:enabled').on('click',function(n){e(this).closest('tr').toggleClass('selected',this.checked);if(n.shiftKey&&l&&l!==n.target){t.tableSelectRange(e(n.target).closest('tr')[0],e(l).closest('tr')[0],n.target.checked)};i(c.length===c.filter(':checked').length);l=n.target});i(c.length===c.filter(':checked').length)};t.tableSelectRange=function(t,l,i){var a=t.rowIndex>l.rowIndex?'previousSibling':'nextSibling';for(var c=t[a];c;c=c[a]){var n=e(c);if(c.nodeType!==1){continue};n.toggleClass('selected',i);n.find('input[type="checkbox"]').prop('checked',i);if(l.nodeType){if(c===l){break}}
else if(e.filter(l,[c]).r.length){break}}}})(jQuery,Drupal);
/* Source and licensing information for the above line(s) can be found at http://www.magellantutoring.com/core/misc/tableselect.js. */