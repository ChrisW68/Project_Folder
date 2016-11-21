import React, { Component } from 'react';
import { View, TextInput } from 'react-native';
import { Button, Card, CardSection } from './commons';

class LoginForm extends Component {
	render() {
		return (
			<Card>
				//Text input for email address
				<CardSection>
					<TextInput style={{ height:20, width:100 }}>
						<Text>
						email
						</Text>
					</TextInput>
				</CardSection>

				<CardSection />

				<CardSection>
					<Button>
						Log in, Please!
					</Button>
				</CardSection>
			</Card>
		);
	}
}

export default LoginForm;