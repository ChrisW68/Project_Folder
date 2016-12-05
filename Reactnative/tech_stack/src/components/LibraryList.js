import React, { Component } from 'react';
import { connect } from 'react-redux';

class LibraryList extends Component {
	render() {
		console.log(this.props);
		return;
	}
}

//Reach into the Redux state and pull out data
const mapStateToProps = state => {
	return { libraries: state.libraries };
};

export default connect(mapStateToProps)(LibraryList);
