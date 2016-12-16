import _ from 'lodash';
import React, { Component } from 'react';
import { connect } from 'react-redux';
import Communications from 'react-native-communications';
import EmployeeForm from './EmployeeForm';
import { employeeUpdate, employeeSave, employeeDelete } from '../actions';
import { Card, CardSection, Button, Confirm } from './common';


class EmployeeEdit extends Component {
	state= { ShowModal: false };

	componentWillMount() {
		_.each(this.props.employee, (value, prop) => {
			this.props.employeeUpdate({ prop, value });
		});
	}

	onButtonPress() {
		const { name, phone, shift } = this.props;
		//console.log(name, phone, shift);
		this.props.employeeSave({ name, phone, shift, uid: this.props.employee.uid });
	}

	OnTextPress() {
		const { phone, shift } = this.props;

		Communications.text(phone, `Your upcoming shift is on ${shift}`);
	}

	onAccept() {
		const { uid } = this.props.employee;
		this.props.employeeDelete({ uid });
	}

	onDeny() {
		this.setState({ showModal: false });
	}


	render() {
		return (
			<Card>
				<EmployeeForm />
				<CardSection>
					<Button onPress={this.onButtonPress.bind(this)}>
						Save Changes
					</Button>
				</CardSection>

				<CardSection>
					<Button onPress={this.OnTextPress.bind(this)}>
						Text Schedule
					</Button>
				</CardSection>
				<CardSection>
					<Button onPress={() => this.setState({ showModal: !this.state.showModal })}>
						Delete Employee
					</Button>
				</CardSection>

				<Confirm
					visible={this.state.ShowModal}
					onAccept={this.onAccept.bind(this)}
					onDeny={this.onDeny.bind(this)}
				>
					Are you sure?
				</Confirm>
			</Card>
		);
	}
}

const mapStateToProps = (state) => {
	const { name, phone, shift } = state.employeeForm;
	return { name, phone, shift };
};

export default connect(mapStateToProps, { 
	employeeUpdate, 
	employeeSave,
	employeeDelete 
})(EmployeeEdit);
