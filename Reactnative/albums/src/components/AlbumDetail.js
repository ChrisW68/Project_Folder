import React from 'react';
import { View, Text, Image } from 'react-native';
import Card from './Card';
import CardSection from './CardSection';

const AlbumDetail = ({ album }) => {
	//Destructoring from props to reduce reference for props and albums
	const { title, artist, thumbnail_image } = album;
	//Destructoring from styles to since it is referenced multiple times
	const { thumbnailStyle, headerContentStyle } = styles;
	return (
		<Card>
			<CardSection>
				<View>
					<Image 
						style={thumbnailStyle}
						source={{ uri: thumbnail_image }}
					/>
				</View>
				<View style={headerContentStyle}>
					<Text>
						{title}
					</Text>
					<Text>
						{artist}
					</Text>
				</View>
			</CardSection>
		</Card>
	);
};

const styles = {
	headerContentStyle: {
		flexDirection: 'column',
		justifyContent: 'space-around'
	},
	thumbnailStyle: {
		height: 50,
		width: 50
	}
};

export default AlbumDetail;
