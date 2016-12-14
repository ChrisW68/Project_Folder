import React from 'react';
import { Scene, Router } from 'react-native-router-flux';
import LoginForm from './components/LoginForm';
import EmployeeList from './components/EmployeeList';

const RouterComponent = () => {
	return (
		/* Router tag organizes all the scenes that be put together 
		for the application */
		<Router sceneStyle={{ paddingTop: 55 }}>
			<Scene key="login" component={LoginForm} title="Please Login" />
			<Scene key="employeeList" component={EmployeeList} title="Employee List" />
		</Router>
	);
};

export default RouterComponent;
