//If state is undefined return null to prevent default from occurring
export default (state = null, action) => {
	switch (action.type) {
		case 'select_library':
			return action.payload;

		default:
			return state;
	}
};
