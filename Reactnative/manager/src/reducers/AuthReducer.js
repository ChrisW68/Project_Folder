import { 
	EMAIL_CHANGED, 
	PASSWORD_CHANGED
	} from '../actions/types';

//This reducer is responsible for email and password property
const INITIAL_STATE = { 
	email: '',
	password: '' 
};

export default (state = INITIAL_STATE, action) => {
	switch (action.type) {
		case EMAIL_CHANGED:
			/* Make a new object, take all the properties from existing
			   state object and place them in the object
			   then define the property email and give it a value of 
			   action dot payload and place it on top of whatever properties
			   that were on the state object*/
			return { ...state, email: action.payload };
		case PASSWORD_CHANGED:
			return { ...state, password: action.payload };

		default:
			return state;
	}
};
