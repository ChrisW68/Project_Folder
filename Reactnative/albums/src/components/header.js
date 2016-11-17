// Import libraries for making a components
import React from 'react';
import { Text, View } from 'react-native';


// Make a component
const Header = () => {
	const { textStyle, viewStyle } = styles;

	return (
		<View style={viewStyle}>
		<Text style={textStyle}>Albums!</Text>
		</View>
		);
};

const styles = {

	viewStyle: {
		backgroundColor: '#F8F8F8',
		justifyContent: 'center',
		alignItems: 'center',
		height: 60,
		paddingTop: 10
	},

	textStyle: {
		fontSize: 25
	}
};

// Make the component available to other parts of the app

export default Header;

