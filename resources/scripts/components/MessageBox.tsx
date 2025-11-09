import * as React from 'react';
import { CheckCircleIcon, ExclamationTriangleIcon, InformationCircleIcon, XCircleIcon } from '@heroicons/react/24/outline';
import tw from 'twin.macro';

export type FlashMessageType = 'success' | 'info' | 'warning' | 'error';

interface Props {
    title?: string;
    children: string;
    type?: FlashMessageType;
    className?: string;
}

const MessageBox = ({ title, children, type, className }: Props) => {
    const getStyles = () => {
        switch (type) {
            case 'error':
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
        const iconClass = 'w-5 h-5 flex-shrink-0';
        
        switch (type) {
            case 'error':
                return <XCircleIcon className={`${iconClass} text-red-600`} />;
            case 'warning':
                return <ExclamationTriangleIcon className={`${iconClass} text-yellow-600`} />;
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
            className={`
                flex items-start p-4 border rounded-lg shadow-sm
                ${getStyles()}
                ${className || ''}
            `}
            role="alert"
        >
            <div className="flex-shrink-0">
                {getIcon()}
            </div>
            <div className="ml-3 flex-1">
                {title && (
                    <h3 className="text-sm font-medium">
                        {title}
                    </h3>
                )}
                <div className="text-sm mt-1">
                    {children}
                </div>
            </div>
        </div>
    );
};

MessageBox.displayName = 'MessageBox';

export default MessageBox;
