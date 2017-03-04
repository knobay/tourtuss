!function(){var e,a={};a.exports=e={},e.boardFieldsMinimal=["name","closed","dateLastActivity","dateLastView","datePluginDisable","idOrganization","prefs","shortLink","shortUrl","url"].join(","),e.boardFieldsFull=[e.boardFieldsMinimal,"desc","descData","invitations","invited","labelNames","memberships","pinned","powerUps","subscribed"].join(","),e.boardFieldsMinimalSubscribed=[e.boardFieldsMinimal,"subscribed"].join(","),e.memberFields=["fullName","initials","idEnterprise","memberType","username","avatarHash","bio","bioData","confirmed","products","url"].join(","),e.memberFieldsStatus=[e.memberFields,"status"].join(","),e.memberFieldsAndPremOrgsAdmin=[e.memberFields,"idPremOrgsAdmin"].join(","),e.organizationFieldsMinimal=["name","displayName","products","prefs","logoHash","idEnterprise"].join(","),e.cardFieldsBulk=["badges","closed","dateLastActivity","desc","descData","due","dueComplete","idAttachmentCover","idList","idBoard","idMembers","idShort","idLabels","name","pos","shortUrl","shortLink","subscribed","url"].join(","),e.boardFieldsInOrganization=[e.boardFieldsMinimal,"idTags"].join(","),e.organizationBoardsFields=[e.organizationFieldsMinimal,"desc","descData","website"].join(","),e.cardActions=["addAttachmentToCard","addChecklistToCard","addMemberToCard","commentCard","copyCommentCard","convertToCardFromCheckItem","createCard","copyCard","deleteAttachmentFromCard","emailCard","moveCardFromBoard","moveCardToBoard","removeChecklistFromCard","removeMemberFromCard","updateCard:idList","updateCard:closed","updateCard:due","updateCheckItemStateOnCard"].join(","),e.boardActions=[e.cardActions,"addMemberToBoard","addToOrganizationBoard","copyBoard","createBoard","createList","deleteCard","disablePlugin","disablePowerUp","enablePlugin","enablePowerUp","makeAdminOfBoard","makeNormalMemberOfBoard","makeObserverOfBoard","moveListFromBoard","moveListToBoard","removeFromOrganizationBoard","unconfirmedBoardInvitation","unconfirmedOrganizationInvitation","updateBoard","updateList:closed"].join(","),e.card={fields:"all",stickers:!0,attachments:!0,pluginData:!0},e.currentBoardMinimal={lists:"open",cards:"visible",card_attachments:"cover",card_stickers:!0,card_fields:[e.cardFieldsBulk,"labels"].join(","),card_checklists:"none",members:"all",member_fields:e.memberFieldsStatus,membersInvited:"all",membersInvited_fields:e.memberFields,memberships_orgMemberType:!0,checklists:"none",organization:!0,organization_fields:"name,displayName,desc,descData,url,website,prefs,memberships,logoHash,products",myPrefs:!0,fields:e.boardFieldsFull},e.currentBoardSecondary={fields:"",actions:e.boardActions,actions_display:!0,actions_limit:50,action_memberCreator_fields:e.memberFieldsAndPremOrgsAdmin,checklists:"none",cards:"visible",card_fields:"",card_checklists:"all",card_checklist_checkItems:"none",labels:"all",labels_limit:1e3},e.currentBoardPluginData={fields:"",boardPlugins:!0,cards:"visible",card_fields:"",card_attachments:!0,card_attachment_fields:"bytes,date,edgeColor,idMember,isUpload,mimeType,name,url",pluginData:!0,card_pluginData:!0,organization:!0,organization_fields:"",organization_pluginData:!0},e.memberBoards={boards:"open,starred",board_fields:e.boardFieldsMinimalSubscribed,boardStars:!0,boardsInvited:"all",boardsInvited_fields:e.boardFieldsMinimalSubscribed,board_organization:!0,board_organization_fields:e.organizationFieldsMinimal,credits:"invitation,promoCode",organizations:"all",organization_fields:e.organizationFieldsMinimal,organizationsInvited:"all",organizationsInvited_fields:e.organizationFieldsMinimal,paid_account:!0},e.memberHeader={channels:!0,notifications:"all",notifications_limit:10,notifications_display:!0,notification_memberCreator_fields:e.memberFields,organizations:"all",organization_paid_account:!0,organization_fields:"name,displayName,idEnterprise",organization_enterprise:!0,paid_account:!0,savedSearches:!0,missedTransferDate:!0},e.organizationBoardsPage={boards:"open",board_fields:e.boardFieldsInOrganization,board_starCounts:"organization",board_membershipCounts:"active",fields:e.organizationBoardsFields,paid_account:!0,memberships:"active",members:"all",tags:!0},e.memberQuickBoards={fields:"idOrganizations",boards:"open,starred",board_fields:e.boardFieldsMinimal,boardStars:!0,organizations:"all",organization_fields:"idBoards"},e.quickBoardsSearch=function(a){return{query:a,modelTypes:"boards",board_fields:e.boardFieldsMinimal,partial:!0}};var i,r,o,n,d,s;o=function(e){var a;try{return window.JSON.parse(e)}catch(i){return a=i,null}},i=function(e,a){var i;i=new XMLHttpRequest,i.open("GET",e,!0),i.setRequestHeader("Accept","application/json,text/plain"),i.setRequestHeader("X-Trello-Client-Version",window.clientVersion||"quickload"),i.onreadystatechange=function(){4===i.readyState&&(200!==i.status?a([i.status,i.responseText]):a(null,[o(i.responseText),i]))},i.send(null)},r=function(e,a){var i,r,o,n,d,s,t,l,c;for(null==a&&(a={}),r=[],o=/invite-token-[-a-f0-9]*=([^;]+)/g;null!=(l=null!=(s=o.exec(document.cookie))?s[1]:void 0);)r.push(unescape(l));return r.length>0&&(a.invitationTokens=r.join(",")),/^\/1\/search(\/|$)/.test(e)&&(i=null!=(t=/dsc=([^;]+)/.exec(document.cookie))?t[1]:void 0,a.dsc=i),d=function(){var e;e=[];for(n in a)c=a[n],e.push([n,encodeURIComponent(c)].join("="));return e}().join("&"),[e,d].join("?")},d={},n=location.pathname.substr(1),s={init:function(){var a,i,o,n,d;if(s.preloads={},/token/.test(document.cookie))for(o=r("/1/Members/me",e.memberHeader),n=[o].concat(s.getDataUrls()),a=0,i=n.length;i>a;a++)d=n[a],s.preload(d)},getDataUrls:function(){var a,i,o,d,s,t,l,c,m,u;return""===n?[r("/1/Members/me",e.memberBoards)]:null!=(u=null!=(d=/^\/([^\/]*)/.exec(n))?d[1]:void 0)?(u=decodeURIComponent(u).toLowerCase().replace(/[-_ ]+/g," "),u?[r("/1/Members/me",e.memberQuickBoards),r("/1/search",e.quickBoardsSearch(u))]:[r("/1/Members/me",e.memberQuickBoards)]):null!=(a=null!=(s=null!=(t=/^b\/([^\/]+)/.exec(n))?t[1]:void 0)?s:null!=(l=/^board\/[^\/]+\/([^\/]+)/.exec(n))?l[1]:void 0)?[r("/1/Boards/"+a,e.currentBoardMinimal),r("/1/Boards/"+a,e.currentBoardSecondary),r("/1/Boards/"+a,e.currentBoardPluginData)]:null!=(i=null!=(c=/^c\/([^\/]+)/.exec(n))?c[1]:void 0)?[r("/1/Cards/"+i,e.card)]:null!=(o=null!=(m=/^([^\/]+)$/.exec(n))?m[1]:void 0)?[r("/1/Organizations/"+o,e.organizationBoardsPage)]:[]},preload:function(e){var a;e&&(a={isLoading:!0,callbacks:[],start:Date.now(),used:!1,url:e},s.preloads[e]=a,i(e,function(i,r){var o,n,d,t,l,c,m;if(a.isLoading=!1,i)for(a.error=i,c=a.callbacks,n=0,t=c.length;t>n;n++)(o=c[n])(i);else{for(a.data=r,m=a.callbacks,d=0,l=m.length;l>d;d++)(o=m[d])(null,r);setTimeout(function(){return s.removePreload(e)},1e4)}}))},removePreload:function(e){var a,i,r,o;if(e in s.preloads){for(o=s.removeFns,i=0,r=o.length;r>i;i++)(a=o[i])(s._cleanPreload(s.preloads[e]));return delete s.preloads[e]}},_cleanPreload:function(e){var a,i,r,o,n;for(a={},n=["isLoading","start","used","url"],i=0,o=n.length;o>i;i++)r=n[i],a[r]=e[r];return a},removeFns:[],onRemove:function(e){return s.removeFns.push(e)},makeUrl:r,load:function(e,a){var r;return r=s.preloads[e],null!=r?(r.used=!0,r.isLoading?r.callbacks.push(a):(a(r.error,r.data),s.removePreload(e)),s._cleanPreload(r)):void i(e,a)}},s.init(),a.exports=window.QuickLoad=s}();