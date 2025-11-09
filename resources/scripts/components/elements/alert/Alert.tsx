import { ExclamationIcon, ShieldExclamationIcon, CheckCircleIcon, InformationCircleIcon } from '@heroicons/react/outline';
import React from 'react';
import classNames from 'classnames';

interface AlertProps {
    type: 'warning' | 'danger' | 'success' | 'info';
    className?: string;
    children: React.ReactNode;
}

export default ({ type, className, children }: AlertProps) => {
    const getAlertStyles = () => {
        switch (type) {
            case 'danger':
                return 'border-red-200 bg-red-50 text-red-800';
            case 'warning':
                return 'border-yellow-200 bg-yellow-50 text-yellow-800';
            case 'success':
                return 'border-green-200 bg-green-50 text-green-800';
            case 'info':
                return 'border-primary-200 bg-primary-50 text-primary-800';
            default:
                return 'border-gray-200 bg-gray-50 text-gray-800';
        }
    };

    const getIcon = () => {
        const iconClass = 'w-5 h-5 mr-3 flex-shrink-0';
        
        switch (type) {
            case 'danger':
                return <ShieldExclamationIcon className={`${iconClass} text-red-600`} />;
            case 'warning':
                return <ExclamationIcon className={`${iconClass} text-yellow-600`} />;
            case 'success':
                return <CheckCircleIcon className={`${iconClass} text-green-600`} />;
            case 'info':
                return <InformationCircleIcon className={`${iconClass} text-primary-600`} />;
            default:
                return <InformationCircleIcon className={`${iconClass} text-gray-600`} />;
        }
    };

    return (
        <div
            className={classNames(
                'flex items-start border rounded-lg p-4 shadow-sm',
                getAlertStyles(),
                className
            )}
        >
            {getIcon()}
            <div className='flex-1 text-sm font-medium'>
                {children}
            </div>
        </div>
    );
};
