import React, { Component } from 'react';
import { Text } from 'react-native';
import { CardSection } from './common';

class ListItem extends Component {
	render() {
		//Destructor the titleStyle off the styles object
		const { titleStyle } = styles;
		return (
			<CardSection>
			<Text style={titleStyle}>
				{this.props.library.title}</Text>
			</CardSection>
		);
	}
}

const styles = {
	titleStyle: {
		fontSize: 18,
		paddingLeft: 15,
		color:'#2c477c',
	}
};

export default ListItem;
