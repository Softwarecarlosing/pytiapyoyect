/*
 Highstock JS v7.2.1 (2019-10-31)

 Data grouping module

 (c) 2010-2019 Torstein Hnsi

 License: www.highcharts.com/license
*/
(function(b){"object"===typeof module&&module.exports?(b["default"]=b,module.exports=b):"function"===typeof define&&define.amd?define("highcharts/modules/datagrouping",["highcharts"],function(h){b(h);b.Highcharts=h;return b}):b("undefined"!==typeof Highcharts?Highcharts:void 0)})(function(b){function h(e,b,h,z){e.hasOwnProperty(b)||(e[b]=z.apply(null,h))}b=b?b._modules:{};h(b,"parts/DataGrouping.js",[b["parts/Globals.js"],b["parts/Utilities.js"]],function(e,b){var h=b.arrayMax,z=b.arrayMin,B=b.defined,
I=b.extend,v=b.isNumber,y=b.pick;b=e.addEvent;var w=e.Axis,J=e.correctFloat,K=e.defaultPlotOptions,L=e.format,C=e.merge,M=e.Point,D=e.Series,N=e.Tooltip,g=e.approximations={sum:function(a){var d=a.length;if(!d&&a.hasNulls)var c=null;else if(d)for(c=0;d--;)c+=a[d];return c},average:function(a){var d=a.length;a=g.sum(a);v(a)&&d&&(a=J(a/d));return a},averages:function(){var a=[];[].forEach.call(arguments,function(d){a.push(g.average(d))});return void 0===a[0]?void 0:a},open:function(a){return a.length?
a[0]:a.hasNulls?null:void 0},high:function(a){return a.length?h(a):a.hasNulls?null:void 0},low:function(a){return a.length?z(a):a.hasNulls?null:void 0},close:function(a){return a.length?a[a.length-1]:a.hasNulls?null:void 0},ohlc:function(a,d,c,b){a=g.open(a);d=g.high(d);c=g.low(c);b=g.close(b);if(v(a)||v(d)||v(c)||v(b))return[a,d,c,b]},range:function(a,d){a=g.low(a);d=g.high(d);if(v(a)||v(d))return[a,d];if(null===a&&null===d)return null}},F=function(a,d,c,b){var f=this,e=f.data,t=f.options&&f.options.data,
E=[],m=[],n=[],p=a.length,O=!!d,q=[],k=f.pointArrayMap,h=k&&k.length,u=["x"].concat(k||["y"]),w=0,x=0,r;b="function"===typeof b?b:g[b]?g[b]:g[f.getDGApproximation&&f.getDGApproximation()||"average"];h?k.forEach(function(){q.push([])}):q.push([]);var z=h||1;for(r=0;r<=p&&!(a[r]>=c[0]);r++);for(r;r<=p;r++){for(;void 0!==c[w+1]&&a[r]>=c[w+1]||r===p;){var l=c[w];f.dataGroupInfo={start:f.cropStart+x,length:q[0].length};var A=b.apply(f,q);f.pointClass&&!B(f.dataGroupInfo.options)&&(f.dataGroupInfo.options=
C(f.pointClass.prototype.optionsToObject.call({series:f},f.options.data[f.cropStart+x])),u.forEach(function(a){delete f.dataGroupInfo.options[a]}));void 0!==A&&(E.push(l),m.push(A),n.push(f.dataGroupInfo));x=r;for(l=0;l<z;l++)q[l].length=0,q[l].hasNulls=!1;w+=1;if(r===p)break}if(r===p)break;if(k)for(l=f.cropStart+r,A=e&&e[l]||f.pointClass.prototype.applyOptions.apply({series:f},[t[l]]),l=0;l<h;l++){var y=A[k[l]];v(y)?q[l].push(y):null===y&&(q[l].hasNulls=!0)}else l=O?d[r]:null,v(l)?q[0].push(l):null===
l&&(q[0].hasNulls=!0)}return{groupedXData:E,groupedYData:m,groupMap:n}},G={approximations:g,groupData:F},u=D.prototype,P=u.processData,Q=u.generatePoints,x={groupPixelWidth:2,dateTimeLabelFormats:{millisecond:["%A, %b %e, %H:%M:%S.%L","%A, %b %e, %H:%M:%S.%L","-%H:%M:%S.%L"],second:["%A, %b %e, %H:%M:%S","%A, %b %e, %H:%M:%S","-%H:%M:%S"],minute:["%A, %b %e, %H:%M","%A, %b %e, %H:%M","-%H:%M"],hour:["%A, %b %e, %H:%M","%A, %b %e, %H:%M","-%H:%M"],day:["%A, %b %e, %Y","%A, %b %e","-%A, %b %e, %Y"],
week:["Week from %A, %b %e, %Y","%A, %b %e","-%A, %b %e, %Y"],month:["%B %Y","%B","-%B %Y"],year:["%Y","%Y","-%Y"]}},H={line:{},spline:{},area:{},areaspline:{},arearange:{},column:{groupPixelWidth:10},columnrange:{groupPixelWidth:10},candlestick:{groupPixelWidth:10},ohlc:{groupPixelWidth:5}},R=e.defaultDataGroupingUnits=[["millisecond",[1,2,5,10,20,25,50,100,200,500]],["second",[1,2,5,10,15,30]],["minute",[1,2,5,10,15,30]],["hour",[1,2,3,4,6,8,12]],["day",[1]],["week",[1]],["month",[1,3,6]],["year",
null]];u.getDGApproximation=function(){return e.seriesTypes.arearange&&this instanceof e.seriesTypes.arearange?"range":e.seriesTypes.ohlc&&this instanceof e.seriesTypes.ohlc?"ohlc":e.seriesTypes.column&&this instanceof e.seriesTypes.column?"sum":"average"};u.groupData=F;u.processData=function(){var a=this.chart,d=this.options.dataGrouping,c=!1!==this.allowDG&&d&&y(d.enabled,a.options.isStock),b=this.visible||!a.options.chart.ignoreHiddenSeries,f,e=this.currentDataGrouping,t=!1;this.forceCrop=c;this.groupPixelWidth=
null;this.hasProcessed=!0;c&&!this.requireSorting&&(this.requireSorting=t=!0);c=!1===P.apply(this,arguments)||!c;t&&(this.requireSorting=!1);if(!c){this.destroyGroupedData();c=d.groupAll?this.xData:this.processedXData;var h=d.groupAll?this.yData:this.processedYData,m=a.plotSizeX;a=this.xAxis;var n=a.options.ordinal,p=this.groupPixelWidth=a.getGroupPixelWidth&&a.getGroupPixelWidth();if(p){this.isDirty=f=!0;this.points=null;t=a.getExtremes();var g=t.min;t=t.max;n=n&&a.getGroupIntervalFactor(g,t,this)||
1;p=p*(t-g)/m*n;m=a.getTimeTicks(a.normalizeTimeTickInterval(p,d.units||R),Math.min(g,c[0]),Math.max(t,c[c.length-1]),a.options.startOfWeek,c,this.closestPointRange);h=u.groupData.apply(this,[c,h,m,d.approximation]);c=h.groupedXData;n=h.groupedYData;var q=0;if(d.smoothed&&c.length){var k=c.length-1;for(c[k]=Math.min(c[k],t);k--&&0<k;)c[k]+=p/2;c[0]=Math.max(c[0],g)}for(k=1;k<m.length;k++)m.info.segmentStarts&&-1!==m.info.segmentStarts.indexOf(k)||(q=Math.max(m[k]-m[k-1],q));g=m.info;g.gapSize=q;this.closestPointRange=
m.info.totalRange;this.groupMap=h.groupMap;if(B(c[0])&&c[0]<a.min&&b){if(!B(a.options.min)&&a.min<=a.dataMin||a.min===a.dataMin)a.min=Math.min(c[0],a.min);a.dataMin=c[0]}d.groupAll&&(d=this.cropData(c,n,a.min,a.max,1),c=d.xData,n=d.yData);this.processedXData=c;this.processedYData=n}else this.groupMap=null;this.hasGroupedData=f;this.currentDataGrouping=g;this.preventGraphAnimation=(e&&e.totalRange)!==(g&&g.totalRange)}};u.destroyGroupedData=function(){this.groupedData&&(this.groupedData.forEach(function(a,
d){a&&(this.groupedData[d]=a.destroy?a.destroy():null)},this),this.groupedData.length=0)};u.generatePoints=function(){Q.apply(this);this.destroyGroupedData();this.groupedData=this.hasGroupedData?this.points:null};b(M,"update",function(){if(this.dataGroup)return e.error(24,!1,this.series.chart),!1});b(N,"headerFormatter",function(a){var d=this.chart.time,c=a.labelConfig,b=c.series,f=b.tooltipOptions,e=b.options.dataGrouping,g=f.xDateFormat,h=b.xAxis,m=f[(a.isFooter?"footer":"header")+"Format"];if(h&&
"datetime"===h.options.type&&e&&v(c.key)){var n=b.currentDataGrouping;e=e.dateTimeLabelFormats||x.dateTimeLabelFormats;if(n)if(f=e[n.unitName],1===n.count)g=f[0];else{g=f[1];var p=f[2]}else!g&&e&&(g=this.getXDateFormat(c,f,h));g=d.dateFormat(g,c.key);p&&(g+=d.dateFormat(p,c.key+n.totalRange-1));b.chart.styledMode&&(m=this.styledModeFormat(m));a.text=L(m,{point:I(c.point,{key:g}),series:b},d);a.preventDefault()}});b(D,"destroy",u.destroyGroupedData);b(D,"afterSetOptions",function(a){a=a.options;var d=
this.type,c=this.chart.options.plotOptions,b=K[d].dataGrouping,f=this.useCommonDataGrouping&&x;if(H[d]||f)b||(b=C(x,H[d])),a.dataGrouping=C(f,b,c.series&&c.series.dataGrouping,c[d].dataGrouping,this.userOptions.dataGrouping)});b(w,"afterSetScale",function(){this.series.forEach(function(a){a.hasProcessed=!1})});w.prototype.getGroupPixelWidth=function(){var a=this.series,b=a.length,c,e=0,f=!1,g;for(c=b;c--;)(g=a[c].options.dataGrouping)&&(e=Math.max(e,y(g.groupPixelWidth,x.groupPixelWidth)));for(c=
b;c--;)(g=a[c].options.dataGrouping)&&a[c].hasProcessed&&(b=(a[c].processedXData||a[c].data).length,a[c].groupPixelWidth||b>this.chart.plotSizeX/e||b&&g.forced)&&(f=!0);return f?e:0};w.prototype.setDataGrouping=function(a,b){var c;b=y(b,!0);a||(a={forced:!1,units:null});if(this instanceof w)for(c=this.series.length;c--;)this.series[c].update({dataGrouping:a},!1);else this.chart.options.series.forEach(function(b){b.dataGrouping=a},!1);this.ordinalSlope=null;b&&this.chart.redraw()};e.dataGrouping=G;
"";return G});h(b,"masters/modules/datagrouping.src.js",[b["parts/DataGrouping.js"]],function(b){return b})});
//# sourceMappingURL=datagrouping.js.map