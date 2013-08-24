// feedback database
 var couchapp = require('couchapp')
  , path = require('path')
  ;

ddoc = 
  { _id:'_design/api'
  , rewrites : 
    [ {from:"/", to:'index.html'}
    , {from:"/api", to:'../../'}
    , {from:"/api/*", to:'../../*'}
    , {from:"/*", to:'*'}
    ]
  }
  ;

ddoc.views = {
	facilityIdMemberID: {
           map: function(doc) {
  			emit(doc.facilityId + doc.memberId, doc._id);
		}
       }
	};

ddoc.validate_doc_update = function (newDoc, oldDoc, userCtx) {   
  if (newDoc._deleted === true && userCtx.roles.indexOf('_admin') === -1) {
    throw "Only admin can delete documents on this database.";
  } 
}

module.exports = ddoc;