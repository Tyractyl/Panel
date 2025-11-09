import styled from 'styled-components/macro';
import tw from 'twin.macro';

export default styled.div<{ $hoverable?: boolean }>`
    ${tw`flex rounded-lg no-underline text-gray-900 items-center bg-white p-4 border border-gray-200 transition-all duration-200 overflow-hidden`};

    ${(props) => props.$hoverable !== false && tw`hover:border-gray-300 hover:shadow-sm`};

    & .icon {
        ${tw`rounded-lg w-16 flex items-center justify-center bg-gray-100 p-3 text-gray-600`};
    }
`;
